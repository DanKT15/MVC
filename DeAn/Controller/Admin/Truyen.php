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
        
            case 'edit':

                include (ROOT_VIEWS.'Truyen\them.php');

                if (isset($_POST['submit'])) {

                    $name = $_POST['name'];
                    $content = $_POST['content'];
                    $file = $_FILES['upimg'];
                    $TG = $_POST['tacgia'];
                    $Nhom = $_POST['nhom'];
                    $TL = $_POST['theloai'];
                
                    // echo "<pre>";
                    // var_dump($file);
                    // echo "</pre>";
                    
                    $fileName = $_FILES['upimg']['name'];
                    $fileErro = $_FILES['upimg']['error'];
                    // Địa chỉ lưu tạm trên server
                    $filetmp = $_FILES['upimg']['tmp_name'];
          
                    $fileExt = explode('.', $fileName);
                    $fileType = strtolower(end($fileExt));
                    $allows = array('jpg', 'jpeg', 'png', 'pdf', 'gif');

                    if (in_array($fileType, $allows)){
                        // Kiểm tra lỗi ảnh khi tải lên
                        if ($fileErro === 0){
                            // Tạo ra file mới với cách đặt tên cho trước
                            $fileNew = $name . "." . $fileType;
                            // Lưu file vào folder 
                            $fileSave = VIEWS.'Truyen/img/' . $fileNew;
                            move_uploaded_file($filetmp, $fileSave);
                            echo '<p>Upload file thành công</p>';
                        }
                        else{
                            echo '<p "color:red" >File không thể upload do có lỗi</p>';
                        }
                    } 
                    else{
                        echo '<p "color:red" >File không thể upload do kiểu file không đúng</p>';
                    }

                    $edit = $this->model->edit($name, $content, $fileSave, $TG, $Nhom, $TL); 

                }
                break;
        
            case 'update': 
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $exshow = $this->model->exshow($id); 
                    
                    if (isset($_POST['submit'])) {

                        $name = $_POST['name'];
                        $content = $_POST['content'];
                        $file = $_FILES['upimg'];
                        $TG = $_POST['tacgia'];
                        $Nhom = $_POST['nhom'];
                        $TL = $_POST['theloai'];
                    
                        // echo "<pre>";
                        // var_dump($file);
                        // echo "</pre>";

                        $fileSave = '';
                        for ($i=0; $i < count($exshow); $i++) { 

                            $oldpath = $exshow[$i]['ImgTruyen'];
                            // print_r($oldpath);
                        }
                        if (!empty($file)) 
                        {
                            $fileSave = $oldpath;
                        }else {
                            $status = unlink($oldpath);
                            if (!$status){
                                echo "Error: File không bị xóa.";
                            }
                        }

                        $fileName = $_FILES['upimg']['name'];
                        $fileErro = $_FILES['upimg']['error'];
                        // Địa chỉ lưu tạm trên server
                        $filetmp = $_FILES['upimg']['tmp_name'];
            
                        $fileExt = explode('.', $fileName);
                        $fileType = strtolower(end($fileExt));
                        $allows = array('jpg', 'jpeg', 'png', 'pdf', 'gif');

                        if (in_array($fileType, $allows)){
                            // Kiểm tra lỗi ảnh khi tải lên
                            if ($fileErro === 0){
                                // Tạo ra file mới với cách đặt tên cho trước
                                $fileNew = $name . "." . $fileType;
                                // Lưu file vào folder 
                                $fileSave = VIEWS.'Truyen/img/' . $fileNew;
                                move_uploaded_file($filetmp, $fileSave);
                                echo '<p>Upload file thành công</p>';
                            }
                            else{
                                echo '<p "color:red" >File không thể upload do có lỗi</p>';
                            }
                        } 
                        else{
                            echo '<p "color:red" >File không thể upload do kiểu file không đúng</p>';
                        }

                        $update = $this->model->update($id, $name, $content, $fileSave, $TG, $Nhom, $TL); 

                        header("Refresh: 0; url = index.php?c=admin&a=truyen&e=show");
                    }

                }

                include (ROOT_VIEWS.'Truyen\sua.php');  
                
                break;
        
            case 'destroy':
                
                if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $destroy = $this->model->destroy($id);  
                    header("Refresh: 0; url = index.php?c=admin&a=truyen&e=show");

                }
                break;
        
            case 'show':

                $show = $this->model->show();  
                include (ROOT_VIEWS.'Truyen\danhsach.php'); 
                break;

            default:

                $show = $this->model->show();  
                include (ROOT_VIEWS.'Truyen\danhsach.php'); 
                break;

        }          
    }  
} 


?>