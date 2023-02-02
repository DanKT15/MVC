<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <h1>Trang chủ</h1>
       <?php 
       if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
           echo 'Click vào đây để <a href="?c=dangxuat">Logout</a>';
           echo '<br>';
           echo '<br>';
           echo '<a href="?c=userlist">Danh sach thanh vien</a>';
           
       }
       else{
           echo 'Bạn chưa đăng nhập';
           echo '<br>';
           echo '<a href="index.php?c=dangnhap" title="Đăng nhập">Đăng nhập</a>';
           echo '<a href="index.php?c=dangky" title="Đăng ký">Đăng ký</a>';
       }
       ?>
       
    </body>
</html>