<?php

namespace DesignPatterns\Behavioral\Strategy\Image;

class Image{

    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function store(Compressor $compressor, Filter $filter){
        $response = $compressor->compress($this->fileName);
        $response .= $filter->apply($this->fileName);
        return $response;
    }
}