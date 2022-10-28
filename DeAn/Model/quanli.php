<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include_once("Model/model.php");

class quanli extends model {
      
    public function dangnhap($username, $password)  
    {  
        if (!$username || !$password)
        {
            exit;
        }

        $sql = "SELECT * FROM nguoidung WHERE TenUser LIKE '".$username."%' AND Password LIKE '%".$password."%';";
        $result = $this->get($sql);

        if ($result == TRUE) {
            for ($i=0; $i < count($result); $i++) 
            { 
                $ktraname = $result[$i]['TenUser'];
                $ktrapass = $result[$i]['Password'];
                $ktralevel = $result[$i]['Level'];
            }

            if($ktraname == $username && $ktrapass == $password)
            {
                $message = "Đăng nhập thành công!!!";

                if ($ktralevel == 1) {
                    $_SESSION['admin'] = $username;
                    echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
                    $_SESSION['username'] =  $username;
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
                
            }
        }
        else {
            $message = "Sai Mật khẩu hoặc tên tài khoản không tồn tại!!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
    }

    public function dangky($username, $password, $email) 
    {  
        if (!$username || !$password || !$email)
        {
            exit;
        }

        $sql = "SELECT * FROM nguoidung WHERE TenUser LIKE '%".$username."%'";
        $result = $this->get($sql);

        if ($result == TRUE) {
            for ($i=0; $i < count($result); $i++) 
            { 
                $ktraname = $result[$i]['TenUser'];
                $ktraemail = $result[$i]['Email'];
            }

            if ($ktraname == $username || $ktraemail == $email) {
                $message = "Tên Người dùng hoặc email trùng vui lòng chọn lại!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                exit;
            }
        }      
        else {
            $sql = "INSERT INTO nguoidung (TenUser, Password, Email, Level) VALUES ('".$username."', '".$password."', '".$email."', '');";
            $result = $this->set($sql);
            $message = "Đăng ký thành công!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        
    } 

    public function dangxuat() 
    {  
        if (isset($_SESSION['username'])||isset($_SESSION['admin'])){       
            unset($_SESSION['username']); // xóa session login
            unset($_SESSION['admin']);
            header("Refresh: 0; url = index.php?c=user&a"); 
        }
    } 


}
      
      



?>