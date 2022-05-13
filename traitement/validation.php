<?php
require("../includes/connect.php");


if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])) {
        $response = $bdd->prepare('SELECT usr_email FROM user');
        $response->execute();
        $users = $response->fetchAll();
        foreach($users as $user){
            if($user['user_email'] == $_POST['email']){
                $ok = 0;
            }
        }
        if(!isset($ok)){
            $ok = 1;
        }
        if (!$ok) {
            if ($_POST['password'] == $_POST['confirmPassword']) {
                $req = $bdd->prepare('INSERT INTO `user` (`usr_name`, `usr_email`, `usr_password`, `usr_admin`) VALUES (:nom,:email,:pass,:administrator)');
                $req->execute(array(
                    'nom' => $_POST['username'],
                    'email' => $_POST['email'],
                    'pass' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                    'administrator' => 0
                ));
                header('Location: ../connexion.php');
            } else {
                header('Location: ../inscription.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
        } else {
            header('Location: ../inscription.php?erreur=2'); //utilisateur déjà existant
        }
    } else {
        header('Location: ../inscription.php?erreur=3'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: ../inscription.php');
}
