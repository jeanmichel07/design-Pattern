<?php
require_once "Component.php";

class Department implements Component
{
    private $name;
    private $employees = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addEmployee(Component $employee) {
        $this->employees[] = $employee;
    }

    public function removeEmployee(Component $employee) {
        $index = array_search($employee, $this->employees);
        if ($index !== false) {
            unset($this->employees[$index]);
        }
    }

    public function display() {
        echo "Department: " . $this->name . "<br>";

        foreach ($this->employees as $employee) {
            $employee->display();
        }
    }
}