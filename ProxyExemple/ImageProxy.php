<?php
require_once "Image.php";
require_once "RealImage.php";


class ImageProxy implements Image
{
    private $filename;
    private $realImage;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function display(): void
    {
        if ($this->realImage === null) {
            $this->realImage = new RealImage($this->filename);
        }

        $this->realImage->display();
    }
}