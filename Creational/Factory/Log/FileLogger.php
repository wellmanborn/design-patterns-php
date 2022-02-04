<?php

namespace DesignPatterns\Creational\Factory\Log;


class FileLogger implements Logger {
    public function log(string $message){
        try{
            file_put_contents("log.txt", $message);
            return "message is wrote in file";
        }catch (\Exception $e){
            return $e->getMessage();
        }

    }
}