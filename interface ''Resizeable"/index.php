<?php
include_once('Resizeable.php');
include_once('Shape.php');
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');
$random = rand(1, 100);
$circle = new Circle('circle', 5);
$circle->resize($random) . '<br>';
echo 'circle area: ' . $circle->calculateArea() . '<br>';
echo 'circle perimeter: ' . $circle->calculatePerimeter() . '<br>';
$rectangle = new Rectangle('rectangle', 10, 5);
$rectangle->resize($random) . '<br>';
echo 'rectangle area: ' . $rectangle->calculateArea() . '<br>';
echo 'rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br>';
$square = new Square('rectangle', 5);
$square->resize($random) . '<br>';
echo 'square area: ' . $rectangle->calculateArea() . '<br>';
echo 'square perimeter: ' . $rectangle->calculatePerimeter() . '<br>';


