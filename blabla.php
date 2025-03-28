<?php
$password = 'coiff';
$username = 'coiff';
$servername = '192.168.56.111';
$dbname = 'coiff';
$port= 3306;

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) 
{
    die('Erreur connexion'. $mysqli->connect_error);
}

//test1.php




?>