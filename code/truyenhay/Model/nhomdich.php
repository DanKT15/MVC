<?php

include_once("Model/model.php");

class nhomdich extends model {   

    public function show() 
    {  
        $sql = "SELECT * FROM nhomdich;";
        $result = $this->get($sql);
        return $result;
    }

    public function exshow($id) 
    {  
        $sql = "SELECT * FROM nhomdich WHERE TenNhom LIKE '".$id."%';";
        $result = $this->get($sql);
        return $result;
    }  
    
    public function edit($name, $content)  
    {  
        $sql = "INSERT INTO nhomdich (TenNhom, ThongtinNhom) VALUES ('".$name ."', '".$content."');";
        $result = $this->set($sql);
    }
    
    public function update($id, $name, $content) 
    {  
        $sql = "UPDATE nhomdich SET TenNhom='".$name."' , ThongtinNhom='".$content."' WHERE TenNhom LIKE '%".$id."%';";
        $result = $this->set($sql);
    }  
      
    public function destroy($id) 
    {    
        $sql1 = "UPDATE truyen SET TenNhom = NULL WHERE TenNhom LIKE '%".$id."%';";
        $sql2 = "DELETE FROM nhomdich WHERE TenNhom LIKE '%".$id."%';";
        $result1 = $this->set($sql1); 
        $result2 = $this->set($sql2); 
    }  
      
}   


?>