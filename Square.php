<?php
include_once "Resizeable.php";
class Square implements Resizeable
{
    public int $width;

    public function __construct($width)
    {
        $this->width = $width;
    }
    public function calculateArea(): int
{
    return  $this->width * $this->width;
}
public function resize($percentages)
{
    $this->width += $this->width * $percentages/100;
}
}
