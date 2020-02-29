<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// require  everything from model and controller
require 'Model/Connection.php';
require 'Model/Query.php';
require 'Model/User.php';

require 'Controller/HomepageController.php';
require 'Controller/profileController.php';


// creat a new controller
    $controller = new homePageController();
    $controller->render();



    If(!empty($_GET['user']))
{
    $controller = new profileController();
    $controller->render();

}else{
        $controller =new HomepageController();
        $controller->render();
    }