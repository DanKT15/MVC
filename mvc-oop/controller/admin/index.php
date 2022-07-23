<?php

if (isset($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = '';
}

switch ($action) {
    case 'admin-add':
        require_once ('view/admin/admin_add.php');
        break;
    
    default :
        require_once ('view/admin/admin.php');
        break;
}

?>