<?php

include_once("Model/model.php");

class theodoi extends model {   

    public function show() 
    {  
        $sql = "SELECT * FROM theodoi";
        $result = $this->get($sql);
        return $result;
    }  

    public function exshow($id) 
    {  
        $sql = "SELECT tr.TenTruyen, tr.ImgTruyen
            FROM theodoi t, nguoidung n, truyen tr
            WHERE n.TenUser LIKE '".$id."%'
            AND t.TenUser = n.TenUser
            AND t.TenTruyen = tr.TenTruyen";
        $result = $this->get($sql);
        return $result;
    }  
      
    public function edit($User, $Truyen)  
    {  
        $sql = "INSERT INTO theodoi (TenUser, TenTruyen) VALUES ('".$User ."', '".$Truyen."')";
        $result = $this->set($sql);
    }
      
    public function destroy($id) 
    {  
        $sql = "DELETE FROM theodoi WHERE MaTD = ".$id.";";
        $result = $this->set($sql); 
    }  
      
}   


?>