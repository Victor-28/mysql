<?php
function openConnection() {

$dbhost    = "localhost";
$dbuser    = "Victor-28";
$dbpass    = "Akin4wumi";
$db        = "becode";

$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);

return $pdo;
}



