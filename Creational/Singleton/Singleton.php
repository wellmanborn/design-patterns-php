<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton{

    private static $instance = null;

    public function __construct()
    {
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}