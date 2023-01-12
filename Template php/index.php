<?php


include 'connexion.php';

error_reporting(0);
session_start();

    if(isset($_POST['ajouter'])) { // Si quelqu'un appuie sur le bouton "ajouter", on déclenche l'envoi des données.

       // On stocke alors les valeurs envoyées dans les variables suivantes. 
      $prenom = $_POST['prenom'];
      $nom = $_POST['nom'];
      $age = $_POST['age'];

      //On envoie les informations à la base de données.
    $sql = "INSERT INTO users (prenom, nom, age) VALUES('$prenom', '$nom', '$age')";
    $result = mysqli_query($conn, $sql);
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </table>




    </div>
</body>

</html>