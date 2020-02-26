<?php
require 'connection.php';
require 'homepagecontroller.php';
require 'insert.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//
//$servername = "localhost";
//$username = "Victor-28";
//$password = "Akin4wumi";
//$db = "becode";

try {
    //$conn = new PDO('mysql:host=' . $servername . ';dbname=' . $db, $username, $password);
    // set the PDO error mode to exception
    $connection = openConnection();
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
    <!DOCTYPE html>
    <html>
    <body>

    <h2>mysql</h2>

    <form method="post">


        <label for="firstName">firstName:</label><br>
        <input type="text" id="firstName" name="firstName">
        <label for="lastName">lastName:</label><br>
        <input type="text" id="lastName" name="lastName">
        <label for="linkedin">linkedin:</label><br>
        <input type="text" id="linkedin" name="linkedin">
        <label for="github">github:</label><br>
        <input type="text" id="github" name="github">
        <label for="username">username:</label><br>
        <input type="text" id="username" name="username">
        <label for="email">email:</label><br>
        <input type="text" id="email" name="email">
        <label for="preferred_language">preferred_language:</label><br>
        <input type="text" id="preferred_language" name="preferred_language">
        <label for="avatar">avatar:</label><br>
        <input type="text" id="avatar" name="avatar">
        <label for="video">video:</label><br>
        <input type="text" id="video" name="video">
        <label for="quote">quote:</label><br>
        <input type="text" id="quote" name="quote">
        <label for="quote_author">quote_author:</label><br>
        <input type="text" id="quote_author" name="quote_author">


        <input type="submit" name="SubmitButton">

    </form>

    <p>That is who I am</p>
    </body>
    </html>


