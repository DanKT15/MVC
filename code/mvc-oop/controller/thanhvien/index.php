<?php

if (isset($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = '';
}

switch ($action) {
    case 'add':
        require_once ('view/thanhvien/add.php');
        break;
    
    case 'edit':
        require_once ('view/thanhvien/edit.php');
        break;

    case 'delete':
        require_once ('view/thanhvien/delete.php');
        break;
    
    case 'list':
        require_once ('view/thanhvien/list.php');
        break;
    default :
        require_once ('view/thanhvien/trangchu.php');
        break;
}

?>