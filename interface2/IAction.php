<?php

interface IAction {

    public function chay();
    public function bay();
    public function an();
    public function boi();
}

//class IOperator
interface IOperator{
    public function excute($first, $second);
}