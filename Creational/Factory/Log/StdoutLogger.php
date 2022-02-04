<?php

namespace DesignPatterns\Creational\Factory\Log;


class StdoutLogger implements Logger {
    public function log(string $message){
        echo $message;
        return "message is wrote in stdout";
    }
}