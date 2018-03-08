<?php

class Dog extends Animal implements IAction {
    public function diChuyen(){
        return "Di chuyen bang 4 chan";
    }

    public function chay(){
        return "Cho chay bang 4 chan";
    }

    public function bay(){
        return "Khong bay duoc";
    }

    public function an(){
        return "Ăn xương";
    }

    public function boi(){
        return "Bơi được";
    }
}

//class AddOperator
class AddOperator implements IO{
    public function excute($a, $b){
        return $a + $b;
    }
}