<?php 	

if (!isset($_SESSION)) 
{ 
   	session_start();
}

if (isset($_SESSION['user'])) 
{
	unset($_SESSION['user']);
	unset($_SESSION['quyen']);
	header('Location: ../index.php');
}


 ?>