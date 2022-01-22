<?php

namespace DesignPatterns\Behavioral\Strategy\Order;

interface Discount
{
    public function apply_discount(Item $item);
}