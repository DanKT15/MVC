<?php

include_once("Model/truyen.php"); 

class ctrolltruyen extends truyen {  

    public $model;  
 
    public function __construct()    
    {    
        $this->model = new truyen(); 
    }   
     
    public function index()  
    {  
        if (!isset($_GET['e'])) {
            $e = '';
        } else {
            $e = $_GET['e'];
        }
        
        switch ($e) {

            case 'exchapter':

                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $exchapter = $this->model->exchapter($id); 
                    include (ROOT_VIEWSUSER.'chapter.php');
                }

                break;
        
            case 'chitiet':

                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $exshow = $this->model->exshow($id); 
                    $showchapter = $this->model->chapter($id); 
                    $showbinhluan = $this->model->showbinhluan($id);
                    
                    if (isset($_POST['submit'])) {

                        $User = $_POST['name'];
                        $noidung = $_POST['noidung'];
    
                        $binhluan = $this->model->binhluan($User, $id, $noidung); 
                        // header("Refresh: 0; url = index.php?c=user&a=truyen&e=chitiet&id=".$_GET['id'].""); 
    
                    }

                    if (isset($_GET['add'])) {

                        if (isset($_SESSION['username'])) {
                                $User = $_SESSION['username'];
                                $exchapter = $this->model->theodoi($User, $id);
                        }
                        elseif (isset($_SESSION['admin'])) {
                                $User = $_SESSION['admin'];
                                $exchapter = $this->model->theodoi($User, $id);
                        }
                        else {
                            $message = "Chưa đăng nhập!!!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }                                  
                        
                    }
    
                }
                
                include (ROOT_VIEWSUSER.'testchitiet.php'); 
                break;

            default:

                $show = $this->model->show();
                include (ROOT_VIEWSUSER.'truyen.php'); 
                break;

        }          
    }  
} 


?>