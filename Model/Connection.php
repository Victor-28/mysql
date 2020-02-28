<?php

class Connection
{

    private $dbhost;
    private  $dbuser;
    private  $dbpass;
    private  $db;


   public function openConnection() {

        $this->dbhost    = "localhost";
        $this->dbuser    = "newUser";
        $this->dbpass    = "Wachtwoord123!";
        $this->db        = "becode";

//link to database
        $pdo = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->db, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

//$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
        return $pdo;
    }



}