<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>

<?php
// index.php file  
include_once("controller/controller.class.php"); 

$controller = new Controller();  
$controller->invoke();  
?>

</body>
</html>