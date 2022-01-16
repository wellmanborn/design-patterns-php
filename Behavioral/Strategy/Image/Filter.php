<?php


namespace DesignPatterns\Behavioral\Strategy\Image;


interface Filter
{
    public function apply($fileName);
}