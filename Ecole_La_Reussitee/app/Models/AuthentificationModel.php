<?php
// models/AuthenticationModel.php

class AuthentificationModel 
{
    private $conn;

    public function __construct($conn) 
    {
        $this->conn = $conn;
    }

    public function getAdminByEmail($email) 
    {
        $sql = "SELECT id_admin, password FROM administrateurs WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        
        // Lier le paramètre email
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        // Récupérer le résultat sous forme de tableau associatif
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier si un administrateur est trouvé
        if ($admin) {
            return ['id_admin' => $admin['id_admin'], 'password' => $admin['password']];
        }

        // Aucun administrateur trouvé
        return null;
    }
}

