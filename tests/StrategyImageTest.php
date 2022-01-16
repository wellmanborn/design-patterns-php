<?php

use DesignPatterns\Behavioral\Strategy\Image\BlackAndWhite;
use DesignPatterns\Behavioral\Strategy\Image\HighContrast;
use DesignPatterns\Behavioral\Strategy\Image\Image;
use DesignPatterns\Behavioral\Strategy\Image\JpegCompressor;
use DesignPatterns\Behavioral\Strategy\Image\PngCompressor;
use PHPUnit\Framework\TestCase;

class StrategyImageTest extends TestCase
{
    function testImageCompressAndFilter(){
        $image = new Image("sea.jpg");
        $result = $image->store(new JpegCompressor(), new BlackAndWhite());

        $this->assertSame("Compressing sea.jpg using JPEG" . PHP_EOL .
                                    "Filtering sea.jpg using Black and White" . PHP_EOL, $result);


        $image = new Image("sea.jpg");
        $result = $image->store(new PngCompressor(), new HighContrast());

        $this->assertSame("Compressing sea.jpg using PNG" . PHP_EOL .
            "Filtering sea.jpg using High Contrast" . PHP_EOL, $result);
    }
}