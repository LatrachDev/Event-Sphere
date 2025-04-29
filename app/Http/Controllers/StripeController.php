<?php

namespace App\Http\Controllers;

use App\Mail\PaymentSuccessNotification;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe\Checkout\Session as CheckoutSession;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function checkout()
    {
        return view('payment.checkout');
    }

    public function session(Request $request)
    {
        $id = $request->input('event_id');
        $event = Event::findOrFail($id);

        Stripe::setApiKey(config('services.stripe.secret'));

        $checkout_session = CheckoutSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'unit_amount' => $event->price * 100, 
                    'product_data' => [
                        'name' => $event->title,
                        'description' => $event->description,
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success') . '?session_id={CHECKOUT_SESSION_ID}&event_id=' . $id,
            'cancel_url' => route('payment.cancel'),
        ]);

        $event_id = $request->get('event_id');

        if (!$event_id) {
            return redirect()->route('home')->with('error', 'Invalid event');
        }

        $alreadyHasTicket = Ticket::where('user_id', auth()->id())
                                ->where('event_id', $event_id)
                                ->exists();

        if ($alreadyHasTicket) {
            return redirect()->back()->with('error', 'You already have a ticket for this event.');
        }

        return redirect($checkout_session->url);
    }

    public function success(Request $request)
    {
        $session_id = $request->get('session_id');
        $event_id = $request->get('event_id');
        
        $exists = Ticket::where('stripe_id', $session_id)->exists();
        if ($exists) {
            return redirect()->route('home')->with('success', 'Payment already completed.');
        } 

        $ticket = Ticket::create([
            'user_id' => auth()->id(),
            'event_id' => $event_id,
            'stripe_id' => $session_id,
        ]);
    
        $event = Event::findOrFail($event_id);
        $event->number_of_tickets -= 1;
        $event->save();


        $user = auth()->user();

        Mail::to($user->email)->send(new PaymentSuccessNotification($user, $ticket));

        return view('payment.success');
    }

    public function cancel()
    {
        return view('payment.cancel');
    }
}
