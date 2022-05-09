<?php
require("includes/connect.php");

$req = $bdd->prepare('UPDATE story SET sto_hidden = :hid WHERE sto_id = :id');
$req->execute(array(
    'hid' => !$_GET['sto_hidden'],
    'id' => $_GET['sto_id']
));
header('Location: index.php');
