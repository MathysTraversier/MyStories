<?php
session_start();
require("../includes/connect.php");

if (isset($_POST['choix']) && isset($_POST['choixRelie']) && isset($_POST['paragrapheArr'])) {
    if ($_POST['choixRelie'] == "null") {
        $relation = null;
    } else {
        $relation = $_POST['choixRelie'];
    }
    $req = $bdd->prepare('INSERT INTO `relation` (`cho_id`, `cho_related`,`ste_id`) VALUES (:choice,
    :relation,:steID)');
    $req->execute(array(
        'choice' => $_POST['choix'],
        'relation' => $relation,
        'steID' => $_POST['paragrapheArr']
    ));
    header('Location: ../creationHistoire.php');
} else {
    header('Location: ../creationHistoire.php?error=2');
}
