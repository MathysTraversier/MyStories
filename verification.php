<?php
session_start();
require("includes/connect.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $requete = "SELECT count(*) FROM user where 
              (usr_email = ? or usr_name = ?) and usr_password = ? ";
        $response = $bdd->prepare($requete);
        $response->execute(array($_POST['email'], $_POST['email'], $_POST['password']));
        $data = $response->fetch();
        $count = $data['count(*)'];
        if ($count != 0) // nom d'utilisateur et mot de passe correctes
        {
            $requete = "SELECT * FROM user WHERE (usr_email = ? or usr_name = ?) AND usr_password=?";

            $response = $bdd->prepare($requete);
            $response->execute(array($_POST['email'], $_POST['email'], $_POST['password']));

            $user = $response->fetch();
            $_SESSION['user'] = $user['usr_name'];
            $_SESSION['admin'] = $user['usr_admin'];
            $_SESSION['lives'] = $user['usr_lives'];
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
