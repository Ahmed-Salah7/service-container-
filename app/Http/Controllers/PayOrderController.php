<?php

namespace App\Http\Controllers;


use App\Billing\PaymentGetwayContract;
use App\Orders\OrderDetials;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetials $orderDetials, PaymentGetwayContract $PaymentGetway)
    {
        $order = $orderDetials->all();
        return $PaymentGetway->charge(2500);
    }
}
