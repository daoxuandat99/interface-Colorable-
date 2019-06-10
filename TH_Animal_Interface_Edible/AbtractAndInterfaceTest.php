<?php
include 'Animals/Chicken.php';
include 'Animals/Tiger.php';
include 'Fruits/Orange.php';
include 'Fruits/Apple.php';
echo('---- Animals');
$animals[0] = new Tiger();
$animals[1] = new Chicken();
foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';
    if ($animal instanceof Chicken) {
        echo $animal->howToEat();
    }
}
echo('---- Fruits<br>');
$fruits[0] = new Apple();
$fruits[1] = new Orange();
foreach ($fruits as $fruit) {
    echo $fruit->howtoEat() . '<br>';
}