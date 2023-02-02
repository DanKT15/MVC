<?php

require ('db.php');

$a = new db();
$a->connect();


if (isset($_GET['c'])){
    $c= $_GET['c'];
}
else {
    $c = '';
}

switch ($c) {

    case 'viewlist':
        if (isset($_GET['a'])){
            $c= $_GET['a'];
            $bangct = $a->db_get_list("SELECT * FROM Thanhvien WHERE name_user LIKE '%$c%' ");
        }
        else {
            $c = '';
        }
        require_once ('viewlist.php');
        break;
    
    case 'userlist':
        $bang = $a->db_get_list("SELECT * FROM Thanhvien");
        require_once ('userlist.php');
        break;
    
    case 'dangky':
        require_once ('dangky.php');
        require_once ('xulidangky.php');
        break;

    case 'dangnhap':
        require_once ('dangnhap.php');
        require_once ('xulidangnhap.php');
        break;

    case 'dangxuat':
        require_once ('logout.php');
        break;

    default:
        require_once ('trangchu.php');
        break;
}




?>