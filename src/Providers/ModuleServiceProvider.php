<?php

declare(strict_types=1);

namespace Vanilo\Flutterwave\Providers;

use Konekt\Concord\BaseModuleServiceProvider;
use Vanilo\Payment\PaymentGateways;
use Vanilo\Flutterwave\FlutterwavePaymentGateway;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    public function boot()
    {
        parent::boot();

        if ($this->config('gateway.register', true)) {
            PaymentGateways::register(
                $this->config('gateway.id', FlutterwavePaymentGateway::DEFAULT_ID),
                FlutterwavePaymentGateway::class
            );
        }

        if ($this->config('bind', true)) {
            $this->app->bind(FlutterwavePaymentGateway::class, function ($app) {
                return new FlutterwavePaymentGateway(
                    // @todo replace with real
                    $this->config('public_key'),
                    $this->config('secret_key'),
                    $this->config('return_url'),
                    $this->config('cancel_url'),
                    $this->config('sandbox')
                );
            });
        }

        $this->publishes([
            $this->getBasePath() . '/' . $this->concord->getConvention()->viewsFolder() =>
            resource_path('views/vendor/flutterwave'),
            'vanilo-flutterwave'
        ]);
    }
}
