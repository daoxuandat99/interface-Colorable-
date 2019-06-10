<?php
include 'ComparableCircle.php';
$circleOne = new ComparableCircle('circleOne', 8);
$circleTow = new ComparableCircle('circleTow', 8);
var_dump($circleOne->compareTo($circleTow));