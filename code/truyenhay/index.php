<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include_once("config.php");

if (!isset($_GET['c'])) {
    $c = '';
} else {
    $c = $_GET['c'];
}


switch ($c) {

    case 'user':

        include_once(ROOT.'Controller\User\user.php');
        $controller = new user();  
        $controller->index();
        break;

    case 'admin':

        include_once(ROOT.'Controller\Admin\admin.php');
        $controller = new admin();  
        $controller->index();
        break;

    default:
      
        include_once(ROOT.'Controller\User\user.php');
        $controller = new user();  
        $controller->index();
        break;

}

?>

