<?php
session_start();
if ($_GET['id'] == 1) { //permet d'ajouter des choix ou des paragraphes à associer dans la page de création des choix
    $_SESSION['compteurPara']++;
} else if ($_GET['id'] == 2) {
    $_SESSION['compteurChoix']++;
} else if ($_GET['id'] == 3) {
    $_SESSION['compteurPara']--;
} else {
    $_SESSION['compteurPara']--;
}
header('Location: ../creationHistoire.php');
