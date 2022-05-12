<?php
session_start();
require("includes/connect.php");

if (isset($_POST['title']) && isset($_POST['resume']) && isset($_POST['nbParagraphes'])) {
    if (!isset($_FILES['couverture'])) {
        header('Location: creationHistoire.php?error=1');
    } else {
        $uploaddir = 'images/';
        $uploadfile = $uploaddir . basename($_FILES['couverture']['name']);
        if (move_uploaded_file($_FILES['couverture']['tmp_name'], $uploadfile)) {
            echo "Ok\n";
        } else {
            echo "Attention";
        }
        print_r($_FILES);
    }
    $req = $bdd->prepare('INSERT INTO story (sto_title, sto_description, sto_image) VALUES (:title,
    :summary,:img)');
    $req->execute(array(
        'title' => $_POST['title'],
        'summary' => $_POST['resume'],
        'img' => $_FILES['couverture']['name']
    ));
    $_SESSION['nbParagraphes'] = $_POST['nbParagraphes'];
    $_SESSION['storyTitle'] = $_POST['title'];
    $_SESSION['creation']++;
    header('Location: creationHistoire.php');
} else {
    header('Location: creationHistoire.php?error=2');
}
