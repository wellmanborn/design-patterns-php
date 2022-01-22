<?php

namespace DesignPatterns\Behavioral\Strategy\Order;

class OnSaleDiscount implements Discount
{

    public function apply_discount(Item $item)
    {
        return $item->price * 0.25 + 20;
    }
}