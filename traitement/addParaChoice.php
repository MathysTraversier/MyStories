<?php
session_start();
if ($_GET['id'] == 1) {
    $_SESSION['compteurPara']++;
} else if ($_GET['id'] == 2) {
    $_SESSION['compteurChoix']++;
} else if ($_GET['id'] == 3) {
    $_SESSION['compteurPara']--;
} else {
    $_SESSION['compteurPara']--;
}
header('Location: ../creationHistoire.php');
