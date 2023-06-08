<?php
require_once "FlowersFactory.php";
require_once "LeafyFactory.php";

// Factory pour créer des legume fleurs
$flowersFactory = new FlowersFactory();

// Factory pour créer des légume feuilles
$leafyFactory = new LeafyFactory();

// Notre legume fleurs 1
$flower1 = $flowersFactory->createVegetable("Artichaut", "Vert");

// Notre legume fleuille 1
$leafy1 = $leafyFactory->createVegetable("Salade", "Vert");

echo $flower1->GetName();