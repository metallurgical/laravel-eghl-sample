<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller
{
    public function index(Request $request)
    {
        $Password = config('eghl.password');
        $ServiceID = config('eghl.service_id');
        $PaymentID = config('eghl.payment_prefix') . rand(1,10000); // will produce e.g: REF1, REF2000, REFN,,,,
        $orderID = config('eghl.order_prefix') . rand(1,10000); // will produce e.g: ORDER1, ORDER2000, ORDERN,,,,
        $MerchantReturnURL = config('eghl.return_url');
        $MerchantApprovalURL = config('eghl.approve_url');
        $MerchantUnApprovalURL = config('eghl.failed_url');
        $MerchantCallBackURL = ''; // optional
        $Amount = '100.00';
        $CurrencyCode = config('eghl.currency_code');
        $CustIP = '127.0.0.1'; // ip address
        $PageTimeout = (int) config('eghl.timeout');
        $CardNo = ''; // optional
        $Token = ''; // optional

        $concat = $Password . $ServiceID . $PaymentID . $MerchantReturnURL . $MerchantApprovalURL . $MerchantUnApprovalURL . $MerchantCallBackURL . $Amount . $CurrencyCode . $CustIP . $PageTimeout . $CardNo . $Token;
        $hash = hash('sha256', $concat);

        return view('eghl-form', compact('hash', 'PaymentID', 'ServiceID', 'orderID', 'Amount', 'CustIP', 'PageTimeout', 'CurrencyCode'));
    }

    public function approve(Request $request)
    {
        return response()->json($request->all());
    }

    public function failed(Request $request)
    {
        return response()->json($request->all());
    }

    public function return(Request $request)
    {
        return response()->json($request->all());
    }
}