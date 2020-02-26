<?php
if(!function_exists("openConnection")){
function openConnection() {

$dbhost    = "localhost";
$dbuser    = "newUser";
$dbpass    = "Wachtwoord123!";
$db        = "becode";

$pdo = new PDO('mysql:host=localhost;dbname=becode','newUser', 'Wachtwoord123!');

//$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
return $pdo;
}


}
