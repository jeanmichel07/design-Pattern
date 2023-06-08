<?php
require_once "Shape.php";
require_once "Square.php";

class SquareAdapter implements Shape
{
    protected $square;

    public function __construct(Square $square)
    {
        $this->square = $square;
    }

    public function getArea()
    {
        return $this->square->calculateArea();
    }
}