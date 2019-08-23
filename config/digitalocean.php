<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | DigitalOcean Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like. Both guzzle and buzz drivers are supported, with "guzzle"
    | being guzzle 3, and "guzzlehttp" being guzzle 5 or 6.
    |
    */

    'connections' => [
        'main' => [
            'driver'  => 'guzzlehttp',
            'token'   => 'your-token',
        ],
    ],
];
