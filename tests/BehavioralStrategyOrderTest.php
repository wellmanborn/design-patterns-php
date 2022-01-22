<?php

use DesignPatterns\Behavioral\Strategy\Order\Item;
use DesignPatterns\Behavioral\Strategy\Order\OnSaleDiscount;
use DesignPatterns\Behavioral\Strategy\Order\TwentyPercentDiscount;
use PHPUnit\Framework\TestCase;

class BehavioralStrategyOrderTest extends TestCase
{
    function testOrderDiscount(){
        $order = new Item(20000);
        $order1 = new Item(20000, new TwentyPercentDiscount());
        $order1->apply_discount();
        $order2 = new Item(20000, new OnSaleDiscount());
        $order2->apply_discount();

        $this->assertSame(intval($order->price), 20000);
        $this->assertSame(intval($order1->apply_discount()), 16000);
        $this->assertSame(intval($order2->apply_discount()), 14980);
    }
}