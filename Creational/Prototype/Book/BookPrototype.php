<?php

namespace DesignPatterns\Creational\Prototype\Book;

abstract class BookPrototype
{
    protected $title;
    abstract public function clone():BookPrototype;

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

}