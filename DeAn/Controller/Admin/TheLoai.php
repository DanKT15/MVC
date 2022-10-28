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
        
            case 'edit':

                include (ROOT_VIEWS.'Theloai\them.php');

                if (isset($_POST['submit'])) {

                    $name = $_POST['name'];
                    $content = $_POST['content'];
                
                    $edit = $this->model->edit($name, $content); 

                }
                break;
        
            case 'update': 
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $exshow = $this->model->exshow($id); 
                    
                    if (isset($_POST['submit'])) {

                        $name = $_POST['name'];
                        $content = $_POST['content'];
    
                        $update = $this->model->update($id, $name, $content); 
                        header("Refresh: 0; url = index.php?c=admin&a=theloai&e=show");
                    }
                }

                include (ROOT_VIEWS.'Theloai\sua.php');  
                
                break;
        
            case 'destroy':
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $destroy = $this->model->destroy($id);                 
                    header("Refresh: 0; url = index.php?c=admin&a=theloai&e=show");
                }
                break;
        
            case 'show':

                $show = $this->model->show();  
                include (ROOT_VIEWS.'Theloai\danhsach.php'); 
                break;

            default:

                $show = $this->model->show();  
                include (ROOT_VIEWS.'Theloai\danhsach.php'); 
                break;

        }          
    }  
} 


?>