<?php
session_start();
require("includes/connect.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $requete = "SELECT count(*) FROM user where 
              usr_email = ? and usr_password = ? ";
        $response = $bdd->prepare($requete);
        $response->execute(array($_POST['email'], $_POST['password']));
        $data = $response->fetch();
        $count = $data['count(*)'];
        echo $count;
        if ($count != 0) // nom d'utilisateur et mot de passe correctes
        {
            $requete = "SELECT usr_name FROM user WHERE usr_email=? AND usr_password=?";

            $response = $bdd->prepare($requete);
            $response->execute(array($_POST['email'], $_POST['password']));

            $nom = $response->fetch();
            $_SESSION['user'] = $nom;
            header('Location: index.php');
        } else {
            header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: connexion.php');
}
