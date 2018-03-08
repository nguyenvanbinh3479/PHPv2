<?php

class chim extends Animal {
    var $long = "Den";

    public function diChuyen () {
        return "Chim Di 2 chan <br>";
    }
}

//class SubOperator
class SubOperator implements IO{
    public function excute($a, $b){
        return $a - $b;
    }
}