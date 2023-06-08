<?php


interface CarBuilderInterface
{
    public function setBrand($brand);
    public function setModel($model);
    public function setColor($color);
    public function setPower($power);
    public function getCar();
}