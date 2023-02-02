<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include_once("Model/quanli.php"); 

class ctrollquanli extends quanli {  

    public $model;   
 
    public function __construct()    
    {    
        $this->model = new quanli();  
    }   
     
    public function index()  
    {  

        if (!isset($_GET['e'])) {
            $e = '';
        } else {
            $e = $_GET['e'];
        }
        
        switch ($e) {

            case 'dangnhap':

                include (ROOT_VIEWSUSER.'trangdangnhap.php'); 
                if (isset($_POST['dangnhap'])) {

                    $username = $_POST['txtFullname'];
                    $password = $_POST['txtPassword'];

                    $exshow = $this->model->dangnhap($username, $password); 
                    
                } 
                break;

            case 'dangky':

                include (ROOT_VIEWSUSER.'trangdangky.php'); 
                if (isset($_POST['dangky'])) {

                    $name = $_POST['txtFullname'];
                    $password = $_POST['txtPassword'];
                    $email = $_POST['txtEmail'];

                    $exshow = $this->model->dangky($name, $password, $email);  
                } 
                break;

            case 'dangxuat':

                $dangxuat = $this->model->dangxuat();  
                break;

            // default:

            //     $show = $this->model->show();  
            //     include (ROOT_VIEWS.'Theloai\danhsach.php'); 
            //     break;

        }          
    }  
} 


?>