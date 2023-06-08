<?php
require_once "Vegetable.php";

class Flowers implements Vegetable
{
    private $name;
    private $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function GetName(): string
    {
        return $this->name;
    }

    public function GetColor(): string
    {
        return $this->name;
    }
}