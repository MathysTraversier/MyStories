<?php
session_start();
require("../includes/connect.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $requete = "SELECT * FROM user where 
              (usr_email = ? OR usr_name = ?)";
        $response = $bdd->prepare($requete);
        $response->execute(array($_POST['email'], $_POST['email']));
        $data = $response->fetchAll();
        if (!empty($data)) // nom d'utilisateur et mot de passe correctes
        {
            foreach($data as $mdp){
                if(password_verify($_POST['password'],$mdp['usr_password'])){
                    $ok = 1;
                }
            }
            if(!isset($ok)){
                $ok = 0;
            }

            if($ok){
                $requete = "SELECT * FROM user WHERE (usr_email = ? or usr_name = ?)";

                $response = $bdd->prepare($requete);
                $response->execute(array($_POST['email'], $_POST['email']));
                $user = $response->fetch();

                $_SESSION['user'] = $user['usr_name'];
                $_SESSION['userID'] = $user['usr_id'];
                $_SESSION['admin'] = $user['usr_admin'];
                $_SESSION['lives'] = $user['usr_lives'];
                header('Location: ../index.php');
            } else {
                header('Location: ../connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
        } else {
            header('Location: ../connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        header('Location: ../connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: ../connexion.php');
}
