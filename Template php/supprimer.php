<?php

include 'connexion.php';

error_reporting(0);
session_start();

$requete = $bdd->exec("DELETE FROM users WHERE prenom = " $prenom"");

?> 

  //connexion a la base de données

  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php
