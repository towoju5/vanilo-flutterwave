<?php

declare(strict_types=1);

namespace Vanilo\Flutterwave;

use Illuminate\Http\Request;
use Vanilo\Contracts\Address;
use Vanilo\Payment\Contracts\Payment;
use Vanilo\Payment\Contracts\PaymentGateway;
use Vanilo\Payment\Contracts\PaymentRequest;
use Vanilo\Payment\Contracts\PaymentResponse;

class FlutterwavePaymentGateway implements PaymentGateway
{
    public const DEFAULT_ID = 'flutterwave';

    public static function getName(): string
    {
        return 'Flutterwave';
    }

    public function createPaymentRequest(Payment $payment, Address $shippingAddress = null, array $options = []): PaymentRequest
    {
        return $payment;
    }

    public function processPaymentResponse(Request $request, array $options = []): PaymentResponse
    {
        return $request;
    }

    public function isOffline(): bool
    {
        return false;
    }
}
