<?php
include_once(dirname(__FILE__) . '/../AbstractClass/Fruits.php');

class Orange extends Fruit
{
    public function howToEat()
    {
        // TODO: Implement howToEat() method.
        return 'Orange could be juiced';
    }
}