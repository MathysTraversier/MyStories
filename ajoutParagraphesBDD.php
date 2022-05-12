<?php
session_start();
require("includes/connect.php");

for ($i = 1; $i <= $_SESSION['nbParagraphes']; $i++) {
    if (isset($_POST['paragraphe' . $i]) && isset($_POST['start' . $i]) && isset($_POST['lossPV' . $i]) && isset($_POST['storyEnd' . $i]) && isset($_POST['victory' . $i])) {
        $req = $bdd->prepare('INSERT INTO `step` (`ste_description`, `ste_start`, `ste_lossPV`, `ste_end`, `ste_victory`) VALUES (:texte,
        :demarrage,:lossPV,:storyEnd,:victory)');
        $req->execute(array(
            'texte' => $_POST['paragraphe' . $i],
            'demarrage' => $_POST['start' . $i],
            'lossPV' => $_POST['lossPV' . $i],
            'storyEnd' => $_POST['storyEnd' . $i],
            'victory' => $_POST['victory' . $i]
        ));
        $_SESSION['creation']++;
        header('Location: creationHistoire.php');
    } else {
        header('Location: creationHistoire.php?error=2');
    }
}
