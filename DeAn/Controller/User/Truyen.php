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
    
                    }
                }
                
                include (ROOT_VIEWSUSER.'chitiettruyen.php'); 
                break;

            default:

                $show = $this->model->show();
                include (ROOT_VIEWSUSER.'truyen.php'); 
                break;

        }          
    }  
} 


?>