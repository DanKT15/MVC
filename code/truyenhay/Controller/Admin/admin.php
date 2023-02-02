<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

class admin {  
 
    public function index()  
    {   
        if (isset($_SESSION['admin']) && $_SESSION['admin']) 
        {
            if (!isset($_GET['a'])) {
                $a = '';
            } else {
                $a = $_GET['a'];
            }
            
            switch ($a) {
    
                case 'truyen':
    
                    include (ROOT.'Controller\Admin\Truyen.php'); 
                    $action = new ctrolltruyen();  
                    $action->index();      
                    break;
    
                case 'user':
    
                    include (ROOT.'Controller\Admin\User.php'); 
                    $action = new ctrolluser();  
                    $action->index();      
                    break;
    
                case 'chapter':
    
                    include (ROOT.'Controller\Admin\Chapter.php'); 
                    $action = new ctrollchapter();  
                    $action->index();      
                    break;
    
                case 'binhluan':
    
                    include (ROOT.'Controller\Admin\BinhLuan.php'); 
                    $action = new ctrollbinhluan();  
                    $action->index();      
                    break;
            
                case 'tacgia':
    
                    include (ROOT.'Controller\Admin\TacGia.php'); 
                    $action = new ctrolltacgia();  
                    $action->index();
                    break;
            
                case 'theloai': 
                    
                    include (ROOT.'Controller\Admin\TheLoai.php'); 
                    $action = new ctrolltheloai();  
                    $action->index();      
                    break;
            
                case 'nhomdich':
    
                    include (ROOT.'Controller\Admin\NhomDich.php'); 
                    $action = new ctrollnhomdich();  
                    $action->index();      
                    break;
            
                default:
    
                    include (ROOT.'Views\Admin\trangchu.php'); 
                    break;
    
            } 
        } else 
        {
            echo 'Chưa Đăng Nhập !!!'.'<br>';
            echo 'Cần Đăng Nhập Với Tài Khoản Admin';
        }       
    }  
} 


?>