<?php

namespace App\Http\Controllers;

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
        Stripe::setApiKey(config('services.stripe.secret'));

        $checkout_session = CheckoutSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'unit_amount' => 1500, // price in cents ($15.00)
                    'product_data' => [
                        'name' => 'Event Ticket',
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

    // public function checkout()
    // {
    //     \Stripe\Stripe::setApiKey(config('stripe.sk'));

    //     $session = \Stripe\Checkout\Session::create([
    //         'line_items' => [
    //             [

    //                 'price_data' => [
    //                     'currency' => 'gbp',
    //                     'product_data' => [
    //                         'name' => 'Send me money',
    //                     ],
    //                     'unit_amount' => 500,
    //                 ],
    //                 'quantity' => 1,
    //             ],
    //         ],
    //         'mode' => 'payment',
    //         'success_url' => route('sucess'),
    //         'cancel_url' => route('home'),
    //     ]);
    //     return redirect()->away($session->url);
    // }

    public function success()
    {
        return view('payment.success');
    }

    public function cancel()
    {
        return view('payment.cancel');
    }
}
