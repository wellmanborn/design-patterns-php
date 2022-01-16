<?php


namespace DesignPatterns\Behavioral\Strategy\Image;


class BlackAndWhite implements Filter
{

    public function apply($fileName)
    {
        return "Filtering " . $fileName . " using Black and White" . PHP_EOL;
    }
}