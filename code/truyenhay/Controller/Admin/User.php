<?php

include_once("Model/user.php"); 

class ctrolluser extends user {  

    public $model;   
 
    public function __construct()    
    {    
        $this->model = new user();  
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

                include (ROOT_VIEWS.'User\them.php');

                if (isset($_POST['submit'])) {

                    $name = $_POST['name'];
                    $password = $_POST['Pass'];
                    $email = $_POST['email'];
                    $level = $_POST['level'];
                
                    $edit = $this->model->edit($name, $password, $email, $level); 

                }
                break;
        
            case 'update': 
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $exshow = $this->model->exshow($id); 
                    
                    if (isset($_POST['submit'])) {

                        $name = $_POST['name'];
                        $password = $_POST['Pass'];
                        $email = $_POST['email'];
                        $level = $_POST['level'];
    
                        $update = $this->model->update($name, $password, $email, $level); 

                        header("Refresh: 0; url = index.php?c=admin&a=user&e=show");
                    }
                }

                include (ROOT_VIEWS.'User\sua.php');  
                
                break;
        
            case 'destroy':
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $destroy = $this->model->destroy($id);  
                    header("Refresh: 0; url = index.php?c=admin&a=user&e=show");

                }
                break;
        
            case 'show':

                $show = $this->model->show();  
                include (ROOT_VIEWS.'User\danhsach.php'); 
                break;

            default:

                $show = $this->model->show();  
                include (ROOT_VIEWS.'User\danhsach.php'); 
                break;

        }          
    }  
} 


?>