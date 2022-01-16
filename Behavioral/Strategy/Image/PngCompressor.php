<?php


namespace DesignPatterns\Behavioral\Strategy\Image;


class PngCompressor implements Compressor
{

    public function compress($fileName)
    {
        return "Compressing " . $fileName . " using PNG" . PHP_EOL;
    }
}