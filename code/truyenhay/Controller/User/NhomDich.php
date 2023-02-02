<?php

include_once(ROOT."Model/nhomdich.php"); 

class ctrollnhomdich extends nhomdich {  

    public $model;   
 
    public function __construct()    
    {    
        $this->model = new nhomdich();  
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
                    include (ROOT_VIEWSUSER.'nhom.php'); 
                }
                break;

        }          
    }  
} 


?>