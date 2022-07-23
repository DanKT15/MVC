<?php

// include('dangky.php');

if(isset($_POST['dangky'])){
    
    $username   = addslashes($_POST['txtFullname']);
    $email      = addslashes($_POST['txtEmail']);
    $password   = addslashes($_POST['txtPassword']);

    $ktra = true;
    
    if (!$password || !$email || !$username)
    {
        // include('dangky.php');
        echo '<br>';
        echo "<h4>Chưa nhập đủ thông tin!!!</h4>";
        $ktra = false;
        exit;
    }
    
    if ($a->db_get_list("SELECT name_user FROM Thanhvien WHERE name_user LIKE '%$username%'") == true){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        $ktra = false;
        exit;
    }

    if ($a->db_get_list("SELECT email_user FROM Thanhvien WHERE email_user LIKE '%$email%'") == true){
        echo "Email này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        $ktra = false;
        exit;
    }
    
    if ($ktra == true) {
        $a->db_execute(
            "INSERT INTO Thanhvien (name_user, email_user, password_user)
             VALUES ('$username', '$email', '$password')"
            );
    }

}


?>
