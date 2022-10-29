<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



use App\Http\Controllers\EmailController;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Order;
use GuzzleHttp\Cookie;

Route::post('/payment/check', function (Request $request) {

    $data = $request->all();

    $ord['order_num_id'] = md5( sha1( time() + rand(0, time())));
    $seed = sha1( time() + rand(0, time()));
    $SecretKey = "DU3Z6Cpoz8";
    $ord['wsb_seed'] = $seed;
    $ord['wsb_signature_open'] = $seed.$data['wsb_storeid'].$ord['order_num_id'].$data['wsb_test'].$data['wsb_currency_id'].$data['wsb_total'].$SecretKey;
    $ord['wsb_signature'] = sha1($seed.$data['wsb_storeid'].$ord['order_num_id'].$data['wsb_test'].$data['wsb_currency_id'].$data['wsb_total'].$SecretKey);
    $ord['form'] = $data['form'];
    $ord['active_status'] = 0;
    $ord['payment_status'] = 0;
    $order = Order::create($ord);
    return response()
        ->json(['order' => $order, 'info' => $ord],200);
});
Route::get('/course-order/{order_num_id?}', function (Request $request, $order_num_id) {
    $order = Order::find($order_num_id);

    if($order) {
        if((($order->payment_status == 1) && ($order->created_at -> diffInDays(Carbon\Carbon::now()) <= 14)) || ($order->payment_status == 5)) {
            return redirect('/course/start')->withCookies([cookie('course', $order_num_id, 999999)]);
        }
        else {
            return redirect('/');
        }
    }
    else {
        return redirect('/');
    }
});


Route::get('/', function () {

    $data['scart'] = "*scart";
    $data['wsb_version'] = "2";
    $data['wsb_language_id'] = "russian";
    $data['wsb_storeid'] = "509438816";
    $data['wsb_store'] = "profguide.org";
    $data['wsb_order_num'] = "";
    $data['wsb_test'] = "0";
    $data['wsb_currency_id'] = "BYN";
    $data['wsb_seed'] = "";
    $data['wsb_return_url'] = "https://profguide.org/payment/success";
    $data['wsb_cancel_return_url'] = "https://profguide.org/";
    $data['wsb_notify_url'] = "https://profguide.org/payment/notify";
    $data['wsb_invoice_item_name'] = "Профгайд - уникальный курс по профориентации. Получи свой неповторимый ответ на вопрос: кем хочешь быть именно ты";
    $data['wsb_invoice_item_quantity'] = "1";
    $data['wsb_invoice_item_price'] = "19";
    $data['wsb_total'] = "19";
    $data['wsb_invoice_item_price2'] = "29";
    $data['wsb_total2'] = "29";
    $data['wsb_signature_open'] = "";
    $data['wsb_signature'] = "";
    $data['price'] = "19";
    $data['loc'] = "by";
    $data['datelast'] = "31.12.2021";
    return view('main')->with('data', $data);
});

Route::get('/en/', function () {

    $data['scart'] = "*scart";
    $data['wsb_version'] = "2";
    $data['wsb_language_id'] = "russian";
    $data['wsb_storeid'] = "509438816";
    $data['wsb_store'] = "profguide.org";
    $data['wsb_order_num'] = "";
    $data['wsb_test'] = "0";
    $data['wsb_currency_id'] = "USD";
    $data['wsb_seed'] = "";
    $data['wsb_return_url'] = "https://profguide.org/payment/success";
    $data['wsb_cancel_return_url'] = "https://profguide.org/en/";
    $data['wsb_notify_url'] = "https://profguide.org/payment/notify";
    $data['wsb_invoice_item_name'] = "Профгайд - уникальный курс по профориентации. Получи свой неповторимый ответ на вопрос: кем хочешь быть именно ты";
    $data['wsb_invoice_item_quantity'] = "1";
    $data['wsb_invoice_item_price'] = "7.99";
    $data['wsb_total'] = "7.99";
    $data['wsb_invoice_item_price2'] = "12.49";
    $data['wsb_total2'] = "12.49";
    $data['wsb_signature_open'] = "";
    $data['wsb_signature'] = "";
    $data['price'] = "7.99";
    $data['loc'] = "by";
    $data['datelast'] = "31.12.2021";
    return view('mainen')->with('data', $data);
});

Route::get('/ru/', function () {

    $data['scart'] = "*scart";
    $data['wsb_version'] = "2";
    $data['wsb_language_id'] = "russian";
    $data['wsb_storeid'] = "509438816";
    $data['wsb_store'] = "profguide.org";
    $data['wsb_order_num'] = "";
    $data['wsb_test'] = "0";
    $data['wsb_currency_id'] = "RUB";
    $data['wsb_seed'] = "";
    $data['wsb_return_url'] = "https://profguide.org/payment/success";
    $data['wsb_cancel_return_url'] = "https://profguide.org/ru/";
    $data['wsb_notify_url'] = "https://profguide.org/payment/notify";
    $data['wsb_invoice_item_name'] = "Профгайд - уникальный курс по профориентации. Получи свой неповторимый ответ на вопрос: кем хочешь быть именно ты";
    $data['wsb_invoice_item_quantity'] = "1";
    $data['wsb_invoice_item_price'] = "600";
    $data['wsb_total'] = "600";
    $data['wsb_invoice_item_price2'] = "890";
    $data['wsb_total2'] = "890";
    $data['wsb_signature_open'] = "";
    $data['wsb_signature'] = "";
    $data['loc'] = "ru";
    $data['price'] = "600";
    $data['datelast'] = "15.01.2022";
    return view('main')->with('data', $data);
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/payment/success', function () {
    return view('success');
});



Route::get('/orders/{order_num_id?}', function (Request $request, $order_num_id) {

    $order = Order::find($order_num_id);
    $order->active_status = 1;
    $order->save();
    return response()
        ->json(['order' => $order],200);
});

//--DELETE a order--//
Route::delete('/orders/{order_id?}', function ($order_id) {
    $order = Order::destroy($order_id);
    return response()
        ->json(['order' => $order],200);
});

Route::post('/payment/notify', [ EmailController::class, 'notify' ]);


Route::get('/conditions', function () {
    return view('terms');
});
Route::get('/pass-course', function () {

    $data['scart'] = "*scart";
    $data['wsb_version'] = "2";
    $data['wsb_language_id'] = "russian";
    $data['wsb_storeid'] = "509438816";
    $data['wsb_store'] = "profguide.org";
    $data['wsb_order_num'] = "";
    $data['wsb_test'] = "0";
    $data['wsb_currency_id'] = "BYN";
    $data['wsb_seed'] = sha1( time() + rand(0, time()));
    $data['wsb_return_url'] = "https://profguide.org/payment/success";
    $data['wsb_cancel_return_url'] = "https://profguide.org/";
    $data['wsb_notify_url'] = "https://profguide.org/payment/notify";
    $data['wsb_invoice_item_name'] = "Профгайд - уникальный курс по профориентации. Получи свой неповторимый ответ на вопрос: кем хочешь быть именно ты";
    $data['wsb_invoice_item_quantity'] = "1";
    $data['wsb_invoice_item_price'] = "19";
    $data['wsb_total'] = "19";
    $data['wsb_signature_open'] = "";
    $data['wsb_signature'] = "";

    return view('start-course')->with('data', $data);
});
Route::get('/start', function () {
    return view('start-course-info');
});
Route::post('/send', [ EmailController::class, 'sendEmail' ]);

Route::get('/step-company', function () {
    return view('step-company');
});
Route::get('/course/{any}', function (Request $request) {
    $token = $request->cookie('course');

    if(!$token) {
        return redirect('/');
    }
    else {

        $ordertoken = Order::find($token);

        if($ordertoken) {
            if((($ordertoken->payment_status == 1) && ($ordertoken->created_at->diffInDays(Carbon\Carbon::now()) <= 14)) || ($ordertoken->payment_status == 5)) {
                if($token != "testing") {
                    $ordertoken->active_status = $ordertoken->active_status + 1;
                    $ordertoken->save();
                }

                return view('course')->with('course', $token);
            }
            else {
                return redirect('/');
            }
        }
        else {
            return redirect('/');
        }
    }
})->where('any', '.*')->name('start');
Route::get('/course-demo/', function (Request $request) {
    return view('coursedemo');
})->where('any', '.*')->name('start');
Route::get('/ru/course-demo/', function (Request $request) {
    return view('coursedemo');
})->where('any', '.*')->name('start');
Route::get('/en/course-demo/', function (Request $request) {
    return view('coursedemo');
})->where('any', '.*')->name('start');
