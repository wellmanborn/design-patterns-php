<?php

use DesignPatterns\Creational\Prototype\Book\BookPrototype;
use DesignPatterns\Creational\Prototype\Book\PDFBookPrototype;
use DesignPatterns\Creational\Prototype\Book\PrintedBookPrototype;
use PHPUnit\Framework\TestCase;

class CreationalPrototypeBookTest extends TestCase
{
    function testImageCompressAndFilter(){
        $pdf = new PDFBookPrototype();
        $printed = new PrintedBookPrototype();

        for($i = 1; $i <= 5; $i++){
            $cloned = clone $pdf;
            $cloned->setTitle("Book Title " . $i);
            $this->assertInstanceOf(PDFBookPrototype::class, $cloned);
            $this->assertInstanceOf(BookPrototype::class, $cloned);
        }

        for($i = 5; $i <= 10; $i++){
            $cloned = clone $printed;
            $cloned->setTitle("Book Title " . $i);
            $this->assertInstanceOf(PrintedBookPrototype::class, $cloned);
            $this->assertInstanceOf(BookPrototype::class, $cloned);
        }
    }
}