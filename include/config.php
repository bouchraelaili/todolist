<?php
// // Informations d'identification
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '1234');
// define('DB_NAME', 'project');

// // Connexion à la base de données MySQL
// $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// // Vérifier la connexion
// if ($conn === false) {
//     die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
// }
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=project;charset=utf8', 'root', '1234');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
