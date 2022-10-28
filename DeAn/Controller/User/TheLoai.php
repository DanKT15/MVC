<?php

include_once("Model/theloai.php"); 

class ctrolltheloai extends theloai {  

    public $model;   
 
    public function __construct()    
    {    
        $this->model = new theloai();  
    }   
     
    public function index()  
    {  
        if (!isset($_GET['e'])) {
            $e = '';
        } else {
            $e = $_GET['e'];
        }
        
        switch ($e) {

            case 'show':
                
                $show = $this->model->show();  
                break;

            case 'chitiet':
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $exshow = $this->model->exshow($id);
                    $showtruyen = $this->model->showtruyen($id);
                    include (ROOT_VIEWSUSER.'theloai.php'); 
                }
                break;

        }          
    }  
} 


?>