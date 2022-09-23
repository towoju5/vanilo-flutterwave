<?php

declare(strict_types=1);

namespace Vanilo\Flutterwave\Tests\Gateway;

use Vanilo\Payment\Contracts\PaymentGateway;
use Vanilo\Payment\PaymentGateways;
use Vanilo\Flutterwave\FlutterwavePaymentGateway;
use Vanilo\Flutterwave\Tests\TestCase;

class RegistrationTest extends TestCase
{
    /** @test */
    public function the_gateway_is_registered_out_of_the_box_with_defaults()
    {
        $this->assertCount(2, PaymentGateways::ids());
        $this->assertContains(FlutterwavePaymentGateway::DEFAULT_ID, PaymentGateways::ids());
    }

    /** @test */
    public function the_gateway_can_be_instantiated()
    {
        $gateway = PaymentGateways::make('flutterwave');

        $this->assertInstanceOf(PaymentGateway::class, $gateway);
        $this->assertInstanceOf(FlutterwavePaymentGateway::class, $gateway);
    }
}
