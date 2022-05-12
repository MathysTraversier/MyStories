<?php
require("includes/connect.php");

$requete = 'DELETE FROM story WHERE sto_id=:id';
$response = $bdd->prepare($requete);
$response->execute(array(
    'id' => $_GET['sto_id']
));

header('Location: index.php');
