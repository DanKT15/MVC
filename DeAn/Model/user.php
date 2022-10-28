<?php

include_once("Model/model.php");

class user extends model {   

    public function show() 
    {  
        $sql = "SELECT * FROM nguoidung;";
        $result = $this->get($sql);
        return $result;
    }  

    public function exshow($id) 
    {  
        $sql = "SELECT * FROM nguoidung WHERE TenUser LIKE '%".$id."%';";
        $result = $this->get($sql);
        return $result;
    }  
      
    public function edit($name, $password, $email, $level)  
    {  
        $sql = "INSERT INTO nguoidung (TenUser, Password, Email, Level) VALUES ('".$name ."', '".$password."', '".$email."', '".$level."');";
        $result = $this->set($sql);
    }
    
    public function update($id, $name, $password, $email) 
    {  
        $sql = "UPDATE nguoidung SET TenUser='".$name."', Password='".$password."', Email='".$email."' WHERE TenUser LIKE '%".$id."%';";
        $result = $this->set($sql);
    }  
      
    public function destroy($id) 
    {  
        $sql = "DELETE FROM nguoidung WHERE TenUser LIKE '%".$id."%';";
        $result = $this->set($sql); 
    }  
      
}   


?>