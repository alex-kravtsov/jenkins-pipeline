<?php

namespace HelloWorld;

class Greeting {

    private $greeting = "Hello, World!\n";

    public function say(){
        echo $this->greeting;
    }

    public function length(){
        return strlen($this->greeting);
    }
}
