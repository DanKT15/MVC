<?php

include_once("Model/binhluan.php"); 

class ctrollbinhluan extends binhluan {  

    public $model;   
 
    public function __construct()    
    {    
        $this->model = new binhluan();  
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

                $show = $this->model->show();  
                include (ROOT_VIEWS.'BinhLuan\danhsach.php'); 
                break;

        }          
    }  
} 


?>