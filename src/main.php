<?php

use HelloWorld\Greeting;

require_once __DIR__ . "/../vendor/autoload.php";

$greeting = new Greeting();
$greeting->say();
