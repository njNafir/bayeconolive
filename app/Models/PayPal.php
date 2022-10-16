<?php

namespace App\Models;

use \App\Model as Model;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

/**
 * Class Batch
 * @package App\Models
 * @version October 21, 2020, 10:52 am UTC
 *
 * @property integer class_id
 * @property string name
 * @property integer status
 */
class PayPal extends Model
{

    public static function payment($transaction)
    {
        $data = [];
        $data['items'] = [
            [
                'name' => $transaction->package_name,
                'price' => $transaction->amount,
                'desc'  => $transaction->package_short_name,
                'qty' => 1
            ]
        ];
  
        $data['invoice_id'] = $transaction->transaction_id;
        $data['invoice_description'] = "Order #{$transaction->transaction_id} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $transaction->amount;


        // $provider = new PayPalClient;
        // // Through facade. No need to import namespaces
        // $provider = PayPal::setProvider();


  
        $provider = new ExpressCheckout;
  
        $response = $provider->setExpressCheckout($data);
  
        $response = $provider->setExpressCheckout($data, true);
        // dd($response);
        
        return $response;

  
        // return redirect($response['paypal_link']);
    }

    
}
