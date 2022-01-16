<?php


namespace DesignPatterns\Behavioral\Strategy\Image;


class HighContrast implements Filter
{

    public function apply($fileName)
    {
        return "Filtering " . $fileName . " using High Contrast" . PHP_EOL;
    }
}