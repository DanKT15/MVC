<?php

if (!isset($_SESSION)) 
{ 
    session_start();
}

if (!isset($_GET['page'])) {
    $page = '';
} else {
    $page = $_GET['page'];
}

switch ($page) {

    case 'theloai':
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sach = chitiettl($conn, $id);
        }

        include(views."newsach.php");
        break;

    case 'sach':

        if (isset($_GET['id1'])) {

            $id = $_GET['id1'];
            $ctsach = chitietsach($conn, $id);

            if (isset($_GET['read'])) {

                if (isset($_SESSION['user'])) {
                    include(views."ctsach.php");
                    break;
                } else {
                    header('Location: admin/login.php');
                }
                
            }
            else {
                include(views."sach.php");
                break;
            }

        }
		else {
			$sach = sach($conn);
			include(views."newsach.php");
			break;
		}

    default:

        $sach = sach($conn);
        include(views."newsach.php");
        break;
}


?>