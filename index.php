<?php
require 'connection.php';
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


        <label for="first_name">first_name:</label><br>
        <input type="text" id="first_name" name="first_name">
        <label for="last-name">lastname:</label><br>
        <input type="text" id="last-name" name="last-name">
        <label for="linkedin">linkedin:</label><br>
        <input type="text" id="linkedin" name="linkedin">
        <label for="github">github:</label><br>
        <input type="text" id="github" name="github">
        <label for="username">username:</label><br>
        <input type="text" id="e-mail" name="e-mail">
        <label for="e-mail">e-mail:</label><br>
        <input type="text" id="username" name="username">
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
        <label for="created_at">created_at:</label><br>
        <input type="text" id="created_at" name="created_at">

        <input type="submit" name="SubmitButton">

    </form>


    <p>That is who I am</p>
    </body>
    </html>


<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last-name'];
    $username = $_POST['username'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['e-mail'];
    $preferred_language = $_POST['preferred_language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quote_author = $_POST['quote_author'];


    emma($_POST['first_name'], $_POST['last-name'], $_POST['username'], $_POST['linkedin'], $_POST['github'], $_POST['preferred_language'], $_POST['e-mail'], $_POST['avatar'], $_POST['video'], $_POST['quote'], $_POST['quote_author']);
}


function emma($first_name, $last_name, $username, $linkedin, $github, $email, $preferred_language, $avatar, $video, $quote, $quote_author)
{
    $newConnection = openConnection();
    $insertCommand = "INSERT INTO student (first_name, last-name, username, linkedin, github, e-mail, preferred_language, avatar, video, quote, quote_author) 
                     VALUES (:first_name, :last-name, :username,:linkedin, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author)";

    $newConnection->prepare($insertCommand);
    $newConnection->execute([
        'first_name' => $first_name,
        'last-name' => $last_name, 'username' => $username, 'linkedin' => $linkedin, 'github' => $github,
        'email' => $email, 'preferred_language' => $preferred_language, 'avatar' => $avatar, 'video' => $video,
        'quote' => $quote, 'quote_author' => $quote_author]);

}


?>