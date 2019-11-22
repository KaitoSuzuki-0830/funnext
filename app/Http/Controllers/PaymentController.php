<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function pay(Request $request){
        Stripe::setApiKey('sk_live_xW6OBKr4m2zOxNBHZYUizSoG006zeGwfsx');

        $charge = Charge::create(array(
            'amount'=>100,
            'currency'=>'jpy',
            'source'=>request()->stripeToken,
        ));
        return redirect()->back();
    }
}
