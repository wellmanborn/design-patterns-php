<?php


namespace DesignPatterns\Behavioral\Strategy\Image;


class JpegCompressor implements Compressor
{

    public function compress($fileName)
    {
        return "Compressing " . $fileName . " using JPEG" . PHP_EOL;
    }
}