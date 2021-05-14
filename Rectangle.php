<?php
include_once "Resizeable.php";
class Rectangle implements Resizeable
{
    public int $width;
    public int $height;

    public function __construct(int $height,int $width)
{
    $this->width = $width;
    $this->height = $height;
}
public function calculateArea() : int
{
    return $this->height * $this->width;
}
public function resize($percentages)
{
    $this->width += $this->width * $percentages/100;
    $this->height += $this->height *$percentages/100;
}
}
