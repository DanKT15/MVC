<?php

include_once("Model/model.php");

class lichsu extends model {   

    public function show() 
    {  
        $sql = "SELECT * FROM lichsu";
        $result = $this->get($sql);
        return $result;
    }  

    public function exshow($id) 
    {  
        $sql = "SELECT tr.TenTruyen, tr.ImgTruyen
                FROM lichsu l, nguoidung n, truyen tr
                WHERE n.TenUser LIKE '".$id."%'
                AND l.TenUser = n.TenUser
                AND l.TenTruyen = tr.TenTruyen";
        $result = $this->get($sql);
        return $result;
    }  
      
    public function edit($User, $Truyen)  
    {  
        $sql = "INSERT INTO lichsu (TenUser, TenTruyen) VALUES ('".$User."', '".$Truyen."')";
        $result = $this->set($sql);
    }
      
    public function destroy($id) 
    {  
        $sql = "DELETE FROM lichsu WHERE MALS = ".$id.";";
        $result = $this->set($sql); 
    }  
      
}   


?>