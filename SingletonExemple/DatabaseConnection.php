<?php

class DatabaseConnection {

    private static $instance; // Instance unique de la classe

    private $connection; // Connexion à la base de données

    // Constructeur privé pour empêcher l'instanciation directe
    private function __construct() {
        // Initialisation de la connexion à la base de données
        $this->connection = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');
    }

    // Méthode statique pour récupérer l'instance unique de la classe
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DatabaseConnection();
        }

        return self::$instance;
    }

    // Méthode pour exécuter une requête sur la base de données
    public function query($sql) {
        return $this->connection->query($sql);
    }
}

// Utilisation de la classe Singleton de connexion à la base de données

// Récupérer l'instance unique de la classe
$database = DatabaseConnection::getInstance();

// Exécuter une requête sur la base de données
$result = $database->query("SELECT * FROM users");

// ...
