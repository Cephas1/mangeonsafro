<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Srmklive\PayPal\Facades\PayPal;
use Illuminate\Support\Str;

class CollectPaymentController extends Controller
{
    public function collect()
    {
        return view('paiements.collect');
    }

    public function payment(Request $request)
    {
        $amount = $request->amount;
        if ($request->type == "stripe") {
            try {
                $this->validate($request, [
                    'card_no' => 'required',
                    'expiry_month' => 'required',
                    'expiry_year' => 'required',
                    'cvv' => 'required',
                ]);

                $stripe = Stripe\Stripe::setApiKey(config('stripe.secret_key'));

                $response = \Stripe\Token::create(array(
                    "card" => array(
                        "number" => $request->input('card_no'),
                        "exp_month" => $request->input('expiry_month'),
                        "exp_year" => $request->input('expiry_year'),
                        "cvc" => $request->input('cvv'),
                    )
                ));

                $charge = \Stripe\Charge::create([
                    'card' => $response['id'],
                    'currency' => 'USD',
                    'amount' => $amount * 100,
                    'description' =>  "Test de paiement du blog paki leonel.",
                ]);

                if ($charge['status'] == 'succeeded') {
                    return response()->json([
                        'status' => 'ok',
                        'message' => "Payment Complete",
                    ], 200);

                    //TODO here code to save order in database.

                } else {
                    return response()->json(['status' => 'error', "message" => "Payment Failed"], 500);

                    //TODO here code to save fail of payment
                }
            } catch (\Exception $e) {
                return response()->json(['status' => 'error', 'error' => $e->getMessage(), "message" => "Payment Failed"], 500);
            }

        } elseif ($request->type == "paypal") {
            try {
                $provider = PayPal::setProvider();
                $provider->setApiCredentials(config('paypal')); // Pull values from Config
                $token = $provider->getAccessToken();
                $provider->setAccessToken($token);
                $provider->setCurrency('USD');
                $res = $provider->createOrder([
                    'intent' => 'CAPTURE',
                    'purchase_units' => [[
                        'reference_id' => Str::random(),
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => $amount
                        ]
                    ]],
                    'application_context' => [
                        'cancel_url' => route('cancel.collect.payment'),
                        'return_url' => route('success.collect.payment')
                    ]
                ]);

                return response()->json([
                    'status' => 'ok',
                    'message' => "pay with link",
                    'url' => $res['links'][1]['href'],
                ], 200);
            } catch (\Exception $e) {
                return response()->json(['status' => 'error', 'error' => $e->getMessage(), "message" => "Payment Failed"], 500);
            }
        }
    }

    public function success(Request $request)
    {

        $provider = PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        // Get PaymentOrder using our transaction ID
        $response = $provider->capturePaymentOrder($request->token);
        //faire le traitement en cas de success

    }


    public function cancel(Request $request)
    {

        dd("Votre paiement a été décliné. La page d'annulation du paiement va ici !");

    }
}
