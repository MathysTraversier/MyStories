<?php
session_start();
require("../includes/connect.php");

for ($i = 1; $i <= $_SESSION['nbParagraphes']; $i++) {
    if (isset($_POST['paragraphe' . $i]) && isset($_POST['start' . $i]) && isset($_POST['lossPV' . $i]) && isset($_POST['storyEnd' . $i]) && isset($_POST['victory' . $i])) {
        $req = $bdd->prepare('INSERT INTO `step` (`ste_description`, `ste_start`, `ste_lossPV`, `ste_end`, `ste_victory`, `sto_id`) VALUES (:texte,
        :demarrage,:lossPV,:storyEnd,:victory,:sto_id)');
        $req->execute(array(
            'texte' => $_POST['paragraphe' . $i],
            'demarrage' => $_POST['start' . $i],
            'lossPV' => $_POST['lossPV' . $i],
            'storyEnd' => $_POST['storyEnd' . $i],
            'victory' => $_POST['victory' . $i],
            'sto_id' => $_SESSION['storyID']
        ));
        $_SESSION['creation'] = 3;
        $_SESSION['compteurPara'] = 1;
        $_SESSION['compteurChoix'] = 2;
        $_SESSION['cho_ste'] = 0;
        header('Location: ../creationHistoire.php');
    } else {
        header('Location: ../creationHistoire.php?error=2');
    }
}
