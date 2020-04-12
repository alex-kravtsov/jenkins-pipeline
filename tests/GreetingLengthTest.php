<?php

use PHPUnit\Framework\TestCase;
use HelloWorld\Greeting;

class GreetingLengthTest extends TestCase {
    
    public function testLength(){
        $greeting = new Greeting();
        $this->assertSame(14, $greeting->length() );
    }
}
