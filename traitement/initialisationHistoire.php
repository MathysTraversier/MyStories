<?php
session_start();
require("../includes/connect.php");

$_SESSION['sto_id'] = $_GET['sto_id'];
$_SESSION['ste_id'] = $_GET['ste_id'];

$requete = "SELECT * FROM step where 
              sto_id = ? AND ste_start = ?";
$response = $bdd->prepare($requete);
$response->execute(array($_SESSION['sto_id'], 1));
$data = $response->fetch();

$_SESSION['storyStart'] = $data['ste_id'];

if ($_GET['new'] == 1) {
    $requete = "SELECT * FROM story where 
    sto_id = ?";
    $response = $bdd->prepare($requete);
    $response->execute(array($_SESSION['sto_id']));
    $data = $response->fetch();

    $requete = "UPDATE story SET sto_played = ? where 
      sto_id = ?";
    $response = $bdd->prepare($requete);
    $response->execute(array($data['sto_played'] + 1, $_SESSION['sto_id']));

    $requete = 'DELETE FROM usr_choice WHERE cho_id IN (SELECT cho_id FROM choice WHERE sto_id =:story)';
    $response = $bdd->prepare($requete);
    $response->execute(array(
        'story' => $_SESSION['sto_id'],
    ));
}

$requete = "SELECT * FROM data_story where 
              usr_id = ? AND sto_id = ?";
$response = $bdd->prepare($requete);
$response->execute(array($_SESSION['userID'], $_SESSION['sto_id']));
$data = $response->fetch();

if (empty($data)) {
    $_SESSION['lives'] = 2;
    $req = $bdd->prepare('INSERT INTO `data_story` (`sto_id`, `ste_id`, `usr_id`,`lives`) VALUES (:story,:step,:user,:lives)');
    $req->execute(array(
        'story' => $_SESSION['sto_id'],
        'step' => $_SESSION['ste_id'],
        'user' => $_SESSION['userID'],
        'lives' => $_SESSION['lives']
    ));
} else {
    if ($_SESSION['ste_id'] == $_SESSION['storyStart']) {
        $_SESSION['lives'] = 2;
    } else {
        $_SESSION['lives'] = $data['lives'];
        $_SESSION['saveLife'] = true;
    }
    $requete = "UPDATE data_story SET ste_id = ? AND lives = ? where 
                usr_id = ? AND sto_id = ?";
    $response = $bdd->prepare($requete);
    $response->execute(array($_SESSION['ste_id'], $_SESSION['lives'], $_SESSION['userID'], $_SESSION['sto_id']));
}

header('Location: ../story.php');
