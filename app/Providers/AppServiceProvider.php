<?php

namespace App\Providers;


use App\Billing\BankPaymentGetway;
use App\Billing\CridetPaymentGetway;
use App\Billing\PaymentGetwayContract;
use http\Env\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGetwayContract::class, function () {
            if (request()->has('credit')) {
                return new CridetPaymentGetway('usd');
            } else {
                return new BankPaymentGetway('usd');
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
