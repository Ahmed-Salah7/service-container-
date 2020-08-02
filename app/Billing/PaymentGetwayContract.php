<?php

namespace App\Billing;

interface PaymentGetwayContract
{
    public function set_discount($discount);

    public function charge($amount);
}
