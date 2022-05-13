<?php
session_start();
require("../includes/connect.php");

if (isset($_POST['envoyer'])) { // est effectué si on continue à ajouter des choix
    $_SESSION['cho_ste']++;
    for ($i = 1; $i <= $_SESSION['compteurChoix']; $i++) {
        if (isset($_POST['choix' . $i])) {
            $req = $bdd->prepare('INSERT INTO `choice` (`cho_ste`, `cho_description`,`sto_id`) VALUES (:typ,
        :summary,:id)');
            $req->execute(array(
                'typ' => $_SESSION['cho_ste'],
                'summary' => $_POST['choix' . $i],
                'id' => $_SESSION['storyID']
            ));
        } else {
            header('Location: ../creationHistoire.php?error=2');
        }
    }
    for ($i = 1; $i <= $_SESSION['compteurPara']; $i++) {
        if (isset($_POST['paragrapheDep' . $i])) {
            $req = $bdd->prepare('UPDATE `step` SET `ste_choiceType` = :choice WHERE ste_id = :id');
            $req->execute(array(
                'choice' => $_SESSION['cho_ste'],
                'id' => $_POST['paragrapheDep' . $i]
            ));
        } else {
            header('Location: ../creationHistoire.php?error=2');
        }
    }
    $_SESSION['compteurPara'] = 1;
    $_SESSION['compteurChoix'] = 2;
    header('Location: ../creationHistoire.php');
} else { //est effectué si l'on veut passer à la page de mise en relation des choix avec leur paragraphe d'arrivée.
    $_SESSION['creation']++;
    header('Location: ../creationHistoire.php');
}
