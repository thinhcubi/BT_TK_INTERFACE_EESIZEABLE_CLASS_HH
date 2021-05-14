<?php

include_once "/var/www/html/BT_TK_INTERFACE_EESIZEABLE_CLASS_HH/Resizeable.php";

class Circle implements Resizeable
{
    public int $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): int
    {
        return  pi() * pow($this->radius, 2);
    }

    public function getRadius(): int
    {
        return $this->radius;
    }
    public function resize($percentages) :void
    {
        $this->radius += $this->radius*$percentages/100;
    }

}
