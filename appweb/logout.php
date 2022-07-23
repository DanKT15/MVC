<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
}
?>
<h3>Đăng Xuất Thành Công</h3>
<a href="trangchu.php">HOME</a>