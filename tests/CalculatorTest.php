<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    public function testecho(){
        $calculator = new Calculator();
        $result = $calculator->sumar(2,3);
        $this->assertEquals(5,$result);
    }

}
