<?php

include_once("Model/theodoi.php"); 

class ctrolltheodoi extends theodoi {  

    public $model;   
 
    public function __construct()    
    {    
        $this->model = new theodoi();  
    }   
     
    public function index()  
    {  
        if (!isset($_GET['e'])) {
            $e = '';
        } else {
            $e = $_GET['e'];
        }
        
        switch ($e) {
        
            case 'destroy':
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $destroy = $this->model->destroy($id);  
                    header("Refresh: 0; url = index.php?c=admin&a=binhluan&e=show");

                }
                break;

            default:

                if (isset($_SESSION['username']) && $_SESSION['username']) 
                {
                    $id = $_SESSION['username'];
                    $show = $this->model->exshow($id);   
                }
                if (isset($_SESSION['admin']) && $_SESSION['admin']) 
                {
                    $id = $_SESSION['admin'];
                    $show = $this->model->exshow($id); 
                }
                include (ROOT_VIEWSUSER.'theodoi.php'); 
                break;

        }          
    }  
} 


?>