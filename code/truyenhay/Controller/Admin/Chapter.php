<?php

include_once("Model/chapter.php"); 

class ctrollchapter extends chapter {  

    public $model;   
 
    public function __construct()    
    {    
        $this->model = new chapter();  
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

                $showtruyen = $this->model->showtruyen();

                include (ROOT_VIEWS.'Chapter\them.php');

                if (isset($_POST['submit'])) {

                    $Chapter = $_POST['namechap'];
                    $Truyen = $_POST['nametruyen'];
                    $noidung = $_POST['noidung'];

                    // echo "<pre>";
                    // var_dump($file);
                    // echo "</pre>";

                    $edit = $this->model->edit($Chapter, $Truyen, $noidung); 

                }

                break;
        
            case 'update': 
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id']; 
                    $exshow = $this->model->exshow($id);
                   
                    if (isset($_POST['submit'])) {

                        $Chapter = $_POST['namechap'];
                        $Truyen = $_POST['nametruyen'];
                        $noidung = $_POST['noidung'];

                        // echo "<pre>";
                        // var_dump($file);
                        // echo "</pre>";
                        
                        $update = $this->model->update($id, $Chapter, $Truyen, $noidung); 

                        header("Refresh: 0; url = index.php?c=admin&a=chapter&e=show");
                    }
                }

                $showtruyen = $this->model->showtruyen();
                include (ROOT_VIEWS.'Chapter\sua.php');  
                
                break;
        
            case 'destroy':
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $destroy = $this->model->destroy($id);  
                    header("Refresh: 0; url = index.php?c=admin&a=chapter&e=show");

                }
                break;
        
            case 'show':
                
                if (isset($_POST['submit'])) {

                    $id = $_POST['truyen']; 
                    $showtruyen = $this->model->extruyen($id); 

                }  
                $showname = $this->model->showtruyen();
                include (ROOT_VIEWS.'Chapter\danhsach.php'); 
                break;

            default:

                if (isset($_POST['submit'])) {

                    $id = $_POST['truyen'];
                    $showtruyen = $this->model->extruyen($id); 

                }
                $showname = $this->model->showtruyen();
                include (ROOT_VIEWS.'Chapter\danhsach.php'); 
                break;

        }          
    }  
} 


?>