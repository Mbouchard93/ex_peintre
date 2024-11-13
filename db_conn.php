<?php
function ouvreConnexion() {
    $db_host = "localhost"; // nom de l'hôte de la base de données
    $db_user = "root"; // nom de l'utilisateur de la base de données, par défaut "root"
    $db_pass = ""; // mot de passe de la base de données, vide par défaut pour "root"
    $db_name = "peintres_db"; // nom de la base de données

    // Création de la connexion MySQLi
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    return $conn; // retour de l'objet de connexion
}

// Appel de la fonction pour établir la connexion
ouvreConnexion();
?>
