<?php

declare(strict_types=1);

use Vanilo\Flutterwave\FlutterwavePaymentGateway;

return [
    'gateway' => [
        'register' => true,
        'id' => FlutterwavePaymentGateway::DEFAULT_ID
    ],
    'bind'          => true,
    'client_id'     => getenv('RAVE_PUBLIC_KEY'),
    'secret'        => getenv('RAVE_SECRET_KEY'),
    'return_url'    => getenv('RAVE_RETURN_URL', ''),
    'cancel_url'    => getenv('RAVE_CANCEL_URL', ''),
    'sandbox'       => (bool) getenv('RAVE_SANDBOX', true),
    'auto_capture_approved_orders' => true,
];
