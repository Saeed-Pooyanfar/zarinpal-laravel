<?php

return [
    /*
    |--------------------------------------------------------------------------
    | merchantID
    |--------------------------------------------------------------------------
    */
    'merchantID' => env('ZARINPAL_MERCHANTID', 'test'),

    /*
    |--------------------------------------------------------------------------
    | driver
    |--------------------------------------------------------------------------
    |
    | Available drivers: 'Rest', 'Soap'
    */
    'driver' => env('ZARINPAL_DRIVER', 'Rest'),

    /*
    |--------------------------------------------------------------------------
    | debug
    |--------------------------------------------------------------------------
    | true: '1', false: '0'
    */
    'debug' => env('ZARINPAL_DEBUG', '0'),

];
