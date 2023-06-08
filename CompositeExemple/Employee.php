<?php
require_once "Component.php";


class Employee implements Component
{
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function display() {
        echo "Employee: " . $this->name . "<br>";
    }
}