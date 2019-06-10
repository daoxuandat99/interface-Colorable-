<?php
include_once(dirname(__FILE__) . '/../AbstractClass/Fruits.php');

class Apple extends Fruit{
    public function howToEat()
    {
        // TODO: Implement howToEat() method.
        return 'Apple could be slided';
    }
}