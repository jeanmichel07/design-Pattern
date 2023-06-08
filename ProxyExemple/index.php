<?php
require_once "ImageProxy.php";

// Utilisation du Proxy
$image1 = new ImageProxy("image1.jpg");
$image2 = new ImageProxy("image2.jpg");
$image3 = new ImageProxy("image3.jpg");

// L'image réelle est chargée et affichée seulement lors de l'appel à la méthode display()
$image1->display(); // Charge et affiche l'image1.jpg
$image1->display(); // Affiche directement l'image1.jpg sans la recharger
$image2->display(); // Charge et affiche l'image2.jpg

$image3->display();
$image3->display();