<?php

include_once("Model/tacgia.php"); 

class ctrolltacgia extends tacgia {  

    public $model;   
 
    public function __construct()    
    {    
        $this->model = new tacgia();  
    }   
     
    public function index()  
    {  
        if (!isset($_GET['e'])) {
            $e = '';
        } else {
            $e = $_GET['e'];
        }
        
        switch ($e) {
               
            case 'chitiet':
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $exshow = $this->model->exshow($id);  
                    include (ROOT_VIEWSUSER.'tacgia.php'); 
                }
                break;

        }          
    }  
} 


?>