<?php
namespace Test;

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class CreationalSingletonTest extends TestCase{

    public function testSingleton(){
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $obj1);
        $this->assertSame($obj1, $obj2);
    }
}