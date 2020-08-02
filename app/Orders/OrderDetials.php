<?php

namespace App\Orders;


use App\Billing\PaymentGetwayContract;

class OrderDetials
{
    private $paymentGetway;

    public function __construct(PaymentGetwayContract $paymentGetway)
    {
        $this->paymentGetway = $paymentGetway;
    }

    public function all()
    {
        $this->paymentGetway->set_discount(500);
        return [
            'name' => 'ahmed',
            'address' => 'helwan'
        ];
    }
}
