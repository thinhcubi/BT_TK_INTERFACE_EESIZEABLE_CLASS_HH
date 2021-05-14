<?php
include_once "Circle/Circle.php";
include_once "Rectangle.php";
include_once "Square.php";
include_once "Resizeable.php";

$circle = new Circle(12);
$rectangle = new Rectangle(12,14);
$square = new Square(10);
$arr = [];
array_push($arr,$circle);
array_push($arr,$rectangle);
array_push($arr,$square);


foreach ($arr as $item){
    echo "Before resize: " . $item->calculateArea(). "<br />";
    $item->resize(20);
    echo "After resize: " . $item->calculateArea().'<br>';
}
