<?php


namespace DesignPatterns\Behavioral\Strategy\Image;


interface Compressor
{
    public function compress($fileName);
}