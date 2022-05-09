<?php
$host = "localhost";
$dbname = "mystories";
$username = "mystories_user";
$password = "secret";

/*$host = "localhost";
$dbname = "lcoulon001";
$username = "lcoulon001";
$password = "mystorieslenamathys";*/

try {
    $bdd = new PDO(
        "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=utf8",
        $username,
        $password
    );
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die("Erreur : " . $e->getMessage());
}
