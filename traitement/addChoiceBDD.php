<?php
session_start();
require("../includes/connect.php"); //ce fichier de traitement permet de stocker les différents choix d'une histoire pour un utilisateur.

$req = $bdd->prepare('INSERT INTO `usr_choice` (`cho_id`) VALUES (:id)');
$req->execute(array(
    'id' => $_GET['cho_id']
));
$_SESSION['ste_id'] = $_GET['ste_id'];
header("Location: ../story.php");
