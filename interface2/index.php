<?php

include 'IAction.php';
include 'class/Animal.class.php';
include 'class/chim.class.php';
include 'class/Dog.class.php';

$chim = new chim();
echo $chim->diChuyen();

$dog = new Dog();
echo $dog->chay();
