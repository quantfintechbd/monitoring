<?php

return [

    "support" => [
        "name"  => env("MAIL_FROM_NAME"),
        "email" => env("MAIL_FROM_ADDRESS"),
        "phone" => env("SUPPORT_PHONE"),
    ],

    "sms_service" => [
        "url"       => "https://sms.gateway",
        "api_token" => "xyz-token-for-sms",
        "sid"       => "NOSIDFOUND",
    ],

    // otp
    "otp" => [
        "service_enable"     => ["SMS", "EMAIL"], 
        "maximum_per_user"   => 10,
        "expired_in_minutes" => 5,
    ],

];