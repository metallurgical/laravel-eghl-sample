<?php

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

use Illuminate\Http\Request;

Route::get('/', function () {

    $Password = 'sit12345';
    $ServiceID = 'sit';
    $PaymentID = 'REF' . rand(1,10000); // will produce e.g: REF1, REF2000, REFN,,,,
    $orderID = 'ORDER' . rand(1,10000); // will produce e.g: ORDER1, ORDER2000, ORDERN,,,,
    $MerchantReturnURL = env('MerchantReturnURL');
    $MerchantApprovalURL = env('MerchantApprovalURL');
    $MerchantUnApprovalURL = env('MerchantUnApprovalURL');
    $MerchantCallBackURL = ''; // optional
    $Amount = '100.00';
    $CurrencyCode = 'MYR';
    $CustIP = '127.0.0.1'; // ip address
    $PageTimeout = 780;
    $CardNo = ''; // optional
    $Token = ''; // optional

    $concat = $Password . $ServiceID . $PaymentID . $MerchantReturnURL . $MerchantApprovalURL . $MerchantUnApprovalURL . $MerchantCallBackURL . $Amount . $CurrencyCode . $CustIP . $PageTimeout . $CardNo . $Token;
    $hash = hash('sha256', $concat);

    return view('eghl-form', compact('hash', 'PaymentID', 'ServiceID', 'orderID', 'Amount', 'CustIP', 'PageTimeout', 'CurrencyCode'));
});

Route::post('/approval', function (Request $request) {
    dd($request->all());
});

Route::post('/unapproval-url', function (Request $request) {
    dd($request->query());
});

Route::get('/return', function (Request $request) {
    dd($request->query());
});
