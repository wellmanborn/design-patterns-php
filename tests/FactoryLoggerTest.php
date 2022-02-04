<?php

use DesignPatterns\Creational\Factory\Log\FileLogger;
use PHPUnit\Framework\TestCase;

class FactoryLoggerTest extends TestCase
{
    function testFactoryLogger(){
        $logger = new FileLogger();
        $this->assertSame($logger->log("message"), "message is wrote in file");
    }
}