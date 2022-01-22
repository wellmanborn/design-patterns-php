<?php

namespace DesignPatterns\Behavioral\Strategy\Order;

class Item
{
    public $price;
    protected $discount = 0;
    protected $_discount_strategy;

    public function __construct(float $price, Discount $discount_strategy = null)
    {
        $this->price = $price;
        $this->_discount_strategy = $discount_strategy;
    }

    public function apply_discount(){
        if($this->_discount_strategy != null)
            $this->discount = $this->_discount_strategy->apply_discount($this);
        return $this->price - $this->discount;
    }
}