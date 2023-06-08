<?php

class Car {
    private $brand;
    private $model;
    private $color;
    private $power;

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setPower($power) {
        $this->power = $power;
    }

    public function getCarDetails() {
        return "Car: " . $this->brand . " " . $this->model . ", Color: " . $this->color . ", Power: " . $this->power;
    }
}