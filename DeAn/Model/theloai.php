<?php

include_once("Model/model.php");

class theloai extends model {   

    public function show() 
    {  
        $sql = "SELECT * FROM theloai;";
        $result = $this->get($sql);
        return $result;
    }  

    public function exshow($id) 
    {  
        $sql = "SELECT * FROM theloai WHERE TenTL LIKE '%".$id."%';";
        $result = $this->get($sql);
        return $result;
    }  

    public function showtruyen($id) 
    {  
        $sql = "SELECT tr.TenTruyen, tr.ImgTruyen
                FROM theloai t, truyen tr
                WHERE t.TenTL LIKE '".$id."%'
                AND t.TenTL = tr.TenTL";
        $result = $this->get($sql);
        return $result;
    }  
      
    public function edit($name, $content)  
    {  
        $sql = "INSERT INTO theloai (TenTL, ThongtinTL) VALUES ('".$name."', '".$content."');";
        $result = $this->set($sql);
    }
    
    public function update($id, $name, $content) 
    {  
        $sql = "UPDATE theloai SET TenTL='".$name."' , ThongtinTL='".$content."' WHERE TenTL LIKE '%".$id."%';";
        $result = $this->set($sql);
    }  
      
    public function destroy($id) 
    {  
        $sql1 = "UPDATE truyen SET TenTL = NULL WHERE TenTL LIKE '%".$id."%';";
        $sql2 = "DELETE FROM theloai WHERE TenTL LIKE '%".$id."%';";
        $result1 = $this->set($sql1);
        $result2 = $this->set($sql2);
    }  
      
}   


?>

