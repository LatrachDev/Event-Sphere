<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
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
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($checkout_session->url);
    }

    public function success(Request $request)
    {
        $session_id = $request->get('session_id');

        return view('payment.success');
    }

    public function cancel()
    {
        return view('payment.cancel');
    }
}
