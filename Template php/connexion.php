<?php


$server = "localhost";
$user = "root"; // Id connexion à phpadmin.
$pass = "root"; // Mdp connexion à phpadmin.
$database = "partielphp"; //Nom de la base de données.

$conn = mysqli_connect($server, $user, $pass, $database); //connexion à la base de données

if (!$conn) { // Si la connexion à la base de données ne s'effectue pas alors on display un message d'erreur.
      die("erreur");
 
}

?>


