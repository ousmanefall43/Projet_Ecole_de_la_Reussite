<?php
// index.php

require 'Config/config.php'; // Inclure le fichier de configuration
require 'Controllers/AuthentificationController.php';
require 'Controllers/teacherPrimController.php';

// Vérifier si $conn est défini dans config.php
if (!isset($conn) || $conn === null) {
    die("Erreur : La connexion à la base de données n'est pas établie.");
}

$authentificationController = new AuthentificationController($conn);

try {
    $errorMessage = $authentificationController->login();
    require('Views/Autentification/login.php'); // Charger la vue
} catch (Exception $e) {
    die("Erreur lors de l'authentification : " . $e->getMessage());
}

// Vérification de l'action demandée
$action = $_GET['action'] ?? 'home';

// Vérifier si la classe SupervisorController existe avant de l'instancier
if (class_exists('SupervisorController')) {
    $surveillantController = new SupervisorController($conn);
} else {
    die("Erreur : La classe SupervisorController n'existe pas.");
}

switch ($action) {
    case 'create':
        if (isset($controller) && method_exists($controller, 'create')) {
            $controller->create();
        } else {
            echo "Erreur : Méthode 'create' non définie.";
        }
        break;
    case 'logout':
        echo "Action logout triggered"; // Debugging pour voir si cette action est bien captée
        $authentificationController->logout();
        break;
    default:
        // Action par défaut si aucune action valide n'est spécifiée
        echo "Action non reconnue.";
        break;
}
