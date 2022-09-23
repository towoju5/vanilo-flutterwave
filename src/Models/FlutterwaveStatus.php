<?php

declare(strict_types=1);

namespace Vanilo\Flutterwave\Models;

use Konekt\Enum\Enum;

class FlutterwaveStatus extends Enum
{
    // Feel free to rename this class to whatever it
    // represents at the specific payment gateway
    // but please keep the "Flutterwave" class prefix.
    // Examples:
    // - "FlutterwaveTransactionStatus",
    // - "FlutterwaveOrderStatus",
    // - "FlutterwavePaymentStatus",
    // - "FlutterwaveInvoiceStatus",
    // - etc.

    // Add constants as possible values.
    // See: https://vanilo.io/docs/2.x/enums

    // The values below are just examples, take the actual
    // list of possible values from the Flutterwave documentation:
    const CREATED = 'created';
    const PENDING_OK = 'pending_ok';
    const INVALID_DATA = 'invalid_data';
    const FRAUD_CHECK = 'fraud_check';
    const AUTH_OK = 'auth_ok';
    const CAPTURED = 'captured';
    const FRAUD_DETECTED = 'fraud_detected';
}
