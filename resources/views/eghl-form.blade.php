<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <form name="frmPayment" method="post" action="https://test2pay.ghl.com/IPGSG/Payment.aspx">
                <input type="hidden" name="TransactionType" value="SALE">
                <input type="hidden" name="PymtMethod" value="ANY">
                <input type="hidden" name="ServiceID" value="{{$ServiceID}}">
                <input type="hidden" name="PaymentID" value="{{$PaymentID}}">
                <input type="hidden" name="OrderNumber" value="{{$orderID}}">
                <input type="hidden" name="PaymentDesc" value="Booking No: IJKLMN, Sector:KUL-BKI, First Flight Date: 26 Sep 2012">
                <input type="hidden" name="MerchantName" value="Merchant A">
                <input type="hidden" name="MerchantReturnURL" value="{{env('MerchantReturnURL')}}">
                <input type="hidden" name="MerchantApprovalURL" value="{{env('MerchantApprovalURL')}}">
                <input type="hidden" name="MerchantUnApprovalURL" value="{{env('MerchantUnApprovalURL')}}">
                <input type="hidden" name="Amount" value="{{$Amount}}">
                <input type="hidden" name="CurrencyCode" value="{{$CurrencyCode}}">
                <input type="hidden" name="CustIP" value="{{$CustIP}}">
                <input type="hidden" name="CustName" value="Jason">
                <input type="hidden" name="CustEmail" value="Jason@gmail.com">
                <input type="hidden" name="CustPhone" value="60126902328">
                <input type="hidden" name="HashValue" value="{{$hash}}">
                <input type="hidden" name="MerchantTermsURL" value="http://merchA.merchdomain.com/terms.html">
                <input type="hidden" name="LanguageCode" value="en">
                <input type="hidden" name="PageTimeout" value="{{$PageTimeout}}">

                <input type="submit" value="Pay"/>
            </form>
        </div>
    </div>
</div>
</body>
</html>
