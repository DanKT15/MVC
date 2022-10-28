<?php

include_once("Model/model.php");

class user extends model {

    public function show() 
    {  
        $sql = "SELECT * FROM theloai;";
        $result = $this->get($sql);
        return $result;
    }  
 
    public function index() 
    {   
            $showtl = $this->show();   

            if(!isset($_SESSION)) 
            { 
                session_start(); 
            }

            if (!isset($_GET['a'])) {
                $a = '';
            } else {
                $a = $_GET['a'];
            }
            
            switch ($a) {

                case 'lichsu':
                    
                    include_once(ROOT_VIEWSUSER.'header.php');
                    include (ROOT.'Controller\User\lichsu.php'); 
                    $action = new ctrolllichsu();  
                    $action->index();
                    break;

                case 'theodoi':
                    
                    include_once(ROOT_VIEWSUSER.'header.php');
                    include (ROOT.'Controller\User\theodoi.php'); 
                    $action = new ctrolltheodoi();  
                    $action->index();
                    break;

                case 'quanli':
    
                    include (ROOT.'Controller\User\quanli.php'); 
                    $action = new ctrollquanli();  
                    $action->index();
                    break;
    
                case 'truyen':
                    
                    include_once(ROOT_VIEWSUSER.'header.php'); 
                    include (ROOT.'Controller\User\Truyen.php'); 
                    $action = new ctrolltruyen();  
                    $action->index(); 
                    break;
            
                case 'tacgia':
                    
                    include_once(ROOT_VIEWSUSER.'header.php'); 
                    include (ROOT.'Controller\User\TacGia.php'); 
                    $action = new ctrolltacgia();  
                    $action->index();

                    break;
            
                case 'theloai': 
                    
                    include_once(ROOT_VIEWSUSER.'header.php'); 
                    include (ROOT.'Controller\User\TheLoai.php'); 
                    $action = new ctrolltheloai();  
                    $action->index();  

                    break;
            
                case 'nhomdich':
                     
                    include_once(ROOT_VIEWSUSER.'header.php'); 
                    include (ROOT.'Controller\User\NhomDich.php'); 
                    $action = new ctrollnhomdich();  
                    $action->index();   

                    break;
            
                default:
                    
                    include_once(ROOT_VIEWSUSER.'header.php'); 
                    include (ROOT.'Controller\User\Truyen.php'); 
                    $action = new ctrolltruyen();  
                    $action->index();
    
            } 
    }  
} 


?>