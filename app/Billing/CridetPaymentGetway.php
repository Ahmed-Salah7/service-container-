<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CridetPaymentGetway implements PaymentGetwayContract
{
    protected $currency;
    protected $discount;

    /**
     * PaymentGetway constructor.
     * @param $currency
     */
    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function set_discount($discount)
    {
        $this->discount = $discount;
    }

    public function charge($amount)
    {
        $fees = $amount * 0.03;
        return [
            'amount' => ($amount - $this->discount) - $fees,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $fees,
        ];
    }
}
