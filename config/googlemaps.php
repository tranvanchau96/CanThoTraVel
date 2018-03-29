<?php
return [
    /* =====================================================================
    |                                                                       |
    |                  Global Settings For Google Map                       |
    |                                                                       |
    ===================================================================== */
// AIzaSyCICVFZg9PawAeVO5oH_BRdE7IEu93eG8E


    /* =====================================================================
    General
    ===================================================================== */
    'key' => 'AIzaSyA5GXyWWQ3sAa20NPLrBTa9WHhfseC3Q5U', //Get API key: https://code.google.com/apis/console
    'adsense_publisher_id' => '', //Google AdSense publisher ID

    'geocode' => [
        'cache' => false, //Geocode caching into database
        'table_name' => 'gmaps_geocache', //Geocode caching database table name
    ],

    'css_class' => '', //Your custom css class

    'http_proxy' => env('HTTP_PROXY', null), // Proxy host and port
];
