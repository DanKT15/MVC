<?php

global $db;
$db = @new mysqli($host, $user, $pass, $database);

if ($db->connect_error){
	die("Không thể kết nối CSDL <br> ". $db->connect_error);
}
$db->query("SET NAMES utf8");

?>