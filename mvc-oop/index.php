<?php

include_once ('module/config.php');
$db = new DB();
$db->connect();

if (isset($_GET['controller'])){
    $controller = $_GET['controller'];
}
else {
    $controller = '';
}

switch ($controller) {
    case 'admin': 
        require_once ('controller/admin/index.php');
        break;
    default : 
        require_once ('controller/thanhvien/index.php');
        break;

}

?>


