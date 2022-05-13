<?php
require("../includes/connect.php");

if($_GET['sto_hidden'] == 0){
    $hidden = 1;
} else{
    $hidden = 0;
}

$req = $bdd->prepare('UPDATE story SET sto_hidden = :hid WHERE sto_id = :id');
$req->execute(array(
    'hid' => $hidden,
    'id' => $_GET['sto_id']
));
header('Location: ../index.php');
