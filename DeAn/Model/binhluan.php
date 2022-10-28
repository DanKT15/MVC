<?php

include_once("Model/model.php");

class binhluan extends model {   

    public function show() 
    {  
        $sql = "SELECT * FROM binhluan;";
        $result = $this->get($sql);
        return $result;
    }  

    public function exshow($id) 
    {  
        $sql = "SELECT b.TenUser, b.NoiDungBL
                FROM truyen t, binhluan b
                WHERE t.TenTruyen LIKE '%".$id."%' 
                AND t.TenTruyen = b.TenTruyen";
        $result = $this->get($sql);
        return $result;
    }  
      
    public function edit($User, $Truyen, $noidung)  
    {  
        $sql = "INSERT INTO binhluan (TenUser, TenTruyen, NoiDungBL) VALUES ('".$User."', '".$Truyen."', '".$noidung."')";
        $result = $this->set($sql);
    }
      
    public function destroy($id) 
    {  
        $sql = "DELETE FROM binhluan WHERE MaBL =".$id.";";
        $result = $this->set($sql); 
    }  
      
}   


?>