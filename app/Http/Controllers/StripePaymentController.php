<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function payment(string $id ) {
        $products = Product::find($id);
        return view('payment',compact('products'));
        
    }
    public function PostPaymant(Request $request , string $id ) {
        $products = Product::find($id);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $products->price,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose"
        ]);
        
        return back()->with('success','Payment has been successfully.');
    }
}
