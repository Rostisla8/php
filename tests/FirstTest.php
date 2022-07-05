<?php
use \PHPUnit\Framework\TestCase;

include './code/functions.php';

class FirstTest extends TestCase{
    
    public function testName(){
        $name = hello('Vasya');
        $this->assertEquals('Vasya' , $name);
    }


}

