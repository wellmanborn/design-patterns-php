<?php

namespace DesignPatterns\Behavioral\Strategy\Order;

class TwentyPercentDiscount implements Discount
{

    public function apply_discount(Item $item)
    {
        return $item->price * 0.2;
    }
}