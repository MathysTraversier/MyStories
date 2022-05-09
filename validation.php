<?php
require("includes/connect.php");


if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])) {
        $response = $bdd->prepare('SELECT usr_email FROM user');
        $response->execute();
        $users = $response->fetch();
        if (!in_array($_POST['email'], $users)) {
            if ($_POST['password'] == $_POST['confirmPassword']) {
                $req = $bdd->prepare('INSERT INTO `user` (`usr_name`, `usr_email`, `usr_password`, `usr_lives`, `usr_admin`) VALUES (:nom,:email,:pass,:lives,:administrator)');
                $req->execute(array(
                    'nom' => $_POST['username'],
                    'email' => $_POST['email'],
                    'pass' => $_POST['password'],
                    'lives' => 3,
                    'administrator' => false
                ));
                header('Location: connexion.php');
            } else {
                header('Location: inscription.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
        } else {
            header('Location: inscription.php?erreur=2'); //utilisateur déjà existant
        }
    } else {
        header('Location: inscription.php?erreur=3'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: inscription.php');
}
