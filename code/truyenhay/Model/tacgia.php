<?php

include_once("Model/model.php");

class tacgia extends model {   

    public function show() 
    {  
        $sql = "SELECT * FROM tacgia;";
        $result = $this->get($sql);
        return $result;
    }  

    public function exshow($id) 
    {  
        $sql = "SELECT * FROM tacgia WHERE TenTG LIKE '%".$id."%';";
        $result = $this->get($sql);
        return $result;
    } 
      
    public function edit($name, $content)  
    {  
        $sql = "INSERT INTO tacgia (TenTG, ThongtinTG) VALUES ('".$name ."', '".$content."');";
        $result = $this->set($sql);
    }
    
    public function update($id, $name, $content) 
    {  
        $sql = "UPDATE tacgia SET TenTG='".$name."' , ThongtinTG='".$content."' WHERE TenTG LIKE '%".$id."%';";
        $result = $this->set($sql);
    }  
      
    public function destroy($id) 
    {  
        $sql1 = "UPDATE truyen SET TenTG = NULL WHERE TenTG LIKE '%".$id."%';";
        $sql2 = "DELETE FROM tacgia WHERE TenTG LIKE '%".$id."%';";
        $result1 = $this->set($sql1); 
        $result2 = $this->set($sql2); 
    }  
      
}   


?>


