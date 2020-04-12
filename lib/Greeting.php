<?php

namespace HelloWorld;

class Greeting {

    private $greeting = "Hello, World!\n";

    public function say(){
        echo $this->greeting;
    }
}
