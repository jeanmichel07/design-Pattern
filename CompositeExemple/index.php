<?php
require_once "Employee.php";
require_once "Department.php";
// Utilisation du Composite

// Création d'employés individuels
$employee1 = new Employee("John Doe");
$employee2 = new Employee("Jane Smith");
$employee3 = new Employee("Mark Johnson");

// Création de départements et ajout d'employés
$department1 = new Department("Accounting");
$department1->addEmployee($employee1);
$department1->addEmployee($employee2);

$department2 = new Department("HR");
$department2->addEmployee($employee3);

// Affichage de la structure
$department1->display();
$department2->display();