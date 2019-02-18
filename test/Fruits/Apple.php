<?php
include_once('../AbstractClass/Fruits.php');

class Apple extends Fruit
{
    public function howToEat()
    {
        return "Apple could be slided";
    }
}