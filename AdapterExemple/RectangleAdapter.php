<?php
require_once "Rectangle.php";
require_once "Shape.php";


class RectangleAdapter implements Shape
{
    private $rectangle;

    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }

    public function getArea()
    {
        return $this->rectangle->calculateArea();
    }
}