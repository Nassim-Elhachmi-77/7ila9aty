<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "7ila9aty";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Erreur connexion");
}

?>