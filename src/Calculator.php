<?php

class Calculator {
    function __construct() {
        echo "cargas el calculator";
    }
    public function sumar($a, $b) {
        return $a + $b;
    }
    public function sumarecho($a,$b){
        $result = $a+$b;
        echo $result;
    }
}
