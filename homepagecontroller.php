<?php
declare(strict_types = 1);

require 'connection.php';


ini_set('display_errors','1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $preferred_language = $_POST['preferred_language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quote_author = $_POST['quote_author'];


    emma($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['linkedin'],
        $_POST['github'], $_POST['preferred_language'],
        $_POST['email'], $_POST['avatar'], $_POST['video'], $_POST['quote'], $_POST['quote_author']);
}


function emma($firstName, $lastName, $username, $linkedin, $github, $email, $preferred_language,
              $avatar, $video, $quote, $quote_author)
{
    $newConnection = openConnection();
    $insertCommand = "INSERT INTO student (firstName, lastName, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) 
                     VALUES (:firstName, :lastName, :username, :linkedin, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author)";

    $newConnection->prepare($insertCommand)->execute([
        'firstName' => $firstName,
        'lastName' => $lastName,
        'username' => $username,
        'linkedin' => $linkedin,
        'github' => $github,
        'email' => $email,
        'preferred_language' => $preferred_language,
        'avatar' => $avatar,
        'video' => $video,
        'quote' => $quote,
        'quote_author' => $quote_author]);

}


?>

