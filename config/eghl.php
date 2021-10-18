<?php

    return [

        /*
        |--------------------------------------------------------------------------
        | EGHL Settings
        |--------------------------------------------------------------------------
        |
        | Here you may configure the setting for eghl
        |
        */

        'password'       => env('EGHL_PASSWORD'),
        'service_id'     => env('EGHL_SERVICE_ID'),
        'payment_prefix' => env('EGHL_PAYMENT_PREFIX'),
        'order_prefix'   => env('EGHL_ORDER_PREFIX'),
        'currency_code'  => env('EGHL_CURRENCY_CODE'),
        'timeout'        => env('EGHL_PAGE_TIMEOUT'),
        'return_url'     => env('EGHL_MERCHANT_RETURN_URL'),
        'approve_url'    => env('EGHL_MERCHANT_APPROVE_URL'),
        'failed_url'     => env('EGHL_MERCHANT_FAIL_URL'),

    ];