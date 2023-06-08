<?php
require_once "Image.php";

class RealImage implements Image
{
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->loadImage();
    }

    private function loadImage(): void
    {
        // Chargement de l'image à partir du disque
        echo "Chargement de l'image : {$this->filename}" . "<br/>";
    }

    public function display(): void
    {
        // Affichage de l'image chargée
        echo "Affichage de l'image : {$this->filename}" . "<br/>";
    }
}