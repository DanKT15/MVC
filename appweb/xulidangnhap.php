<?php

session_start();

// include ('dangnhap.php');

if (isset($_POST['dangnhap'])){

    $username   = addslashes($_POST['txtFullname']);
    $password   = addslashes($_POST['txtPassword']);

    if (!$username || !$password)
    {
        // require('dangnhap.php');
        echo '<br>';
        echo "<h4>Chưa nhập đủ thông tin!!!</h4>";
        exit;
    }

    $queryid = $a->db_get_list("SELECT name_user FROM Thanhvien WHERE name_user = '$username'");
    if ($queryid == false){
        echo "Tên đăng nhập này không tồn tại. Vui lòng chọn Tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    }
    else {
        $sosanh = '';
        $querypass = $a->db_get_list("SELECT password_user FROM Thanhvien WHERE name_user = '$username'");
        foreach($querypass as $key => $valus)
            foreach($valus as $key1 => $valus1){
                $sosanh = $valus1;
            }
        if($password != $sosanh){
            echo "Mật khẩu không đúng. Vui lòng chọn mật khẩu khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
        else{
            $_SESSION['username'] = $username;
            echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='index.php'>Về trang chủ</a>";
            die();
        }
    }
   

}
?>