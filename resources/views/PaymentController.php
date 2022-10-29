<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PaymentController extends Controller
{
    public function order(Request $request)
    {
        $data = $request->all();

        $wsb_email = $data['email'];

        $scart = "*scart";
        $wsb_version = "2";
        $wsb_language_id = "russian";
        $wsb_storeid = "509438816";
        $wsb_store = "profguide.org";
        $SecretKey = "DU3Z6Cpoz8";
        $wsb_order_num = md5( sha1( time() + rand(0, time())));
        $wsb_test = "0";
        $wsb_currency_id = "BYN";
        $wsb_seed = md5( sha1( time() + rand(0, time()) ));
        $wsb_return_url = "http://profguide.org/payment/success";
        $wsb_cancel_return_url = "https://profguide.org/payment/cancel";
        $wsb_notify_url = "https://profguide.org/payment/notify";
        $wsb_invoice_item_name[0] = "Профгайд - уникальный курс по профориентации. Получи свой неповторимый ответ на вопрос: кем хочешь быть именно ты";
        $wsb_invoice_item_quantity[0] = "1";
        $wsb_invoice_item_price[0] = "10";
        $wsb_total = "10";
        $wsb_signature = sha1($wsb_seed.$wsb_storeid.$wsb_order_num.$wsb_test.$wsb_currency_id.$wsb_total.$SecretKey);



        return redirect()->away('https://payment.webpay.by');
    }
}
