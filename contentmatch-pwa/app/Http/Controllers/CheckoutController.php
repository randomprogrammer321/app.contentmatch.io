<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // this assumes user is logged in
        $stripePriceId = 'price_1NO5cwHPavB6hDGgjkjrXm6l';
        $mode = 'subscription';

        return $request->user()->checkout($stripePriceId, [
            'success_url' => route('checkout-success'),
            'cancel_url' => route('checkout-cancel'),
            'mode' => $mode,
        ]);
    }

    public function success()
    {
        // Basic logic for successful checkout
        return view('checkout.success', ['message' => 'Your purchase was successful!']);
    }

    public function cancel()
    {
        // Basic logic for canceled checkout
        return view('checkout.cancel', ['message' => 'Your purchase was canceled.']);
    }
}
