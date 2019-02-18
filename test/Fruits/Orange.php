<?php
include_once('../AbstractClass/Fruits.php');

class Orange extends Fruit
{

    public function howToEat()
    {
        return "Orange could be juiced";
    }
}