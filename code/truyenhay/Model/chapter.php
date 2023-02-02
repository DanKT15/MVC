<?php

include_once("Model/model.php");

class chapter extends model {   

    public function show() 
    {  
        $sql = "SELECT * FROM chapter;";
        $result = $this->get($sql);
        return $result;
    }  

    public function exshow($id) 
    {  
        $sql = "SELECT * FROM chapter WHERE MaChapter = ".$id.";";
        $result = $this->get($sql);
        return $result;
    }  

    public function showtruyen() 
    {  
        $sql = "SELECT TenTruyen FROM truyen;";
        $result = $this->get($sql);
        return $result;
    }
    
    public function extruyen($id) 
    {  
        $sql = "SELECT * FROM chapter WHERE TenTruyen LIKE '".$id."%';";
        $result = $this->get($sql);
        return $result;
    }
      
    public function edit($Chapter, $Truyen, $NoiDung)  
    {  
        $sql = "INSERT INTO chapter (TenChapter, NoiDung, TenTruyen ) VALUES ('".$Chapter."', '".$NoiDung."', '".$Truyen."')";
        $result = $this->set($sql);
    }
    
    public function update($id, $Chapter, $Truyen, $NoiDung) 
    {  
        $sql = "UPDATE chapter SET TenChapter='".$Chapter."' , TenTruyen ='".$Truyen."', NoiDung ='".$NoiDung."' WHERE MaChapter =".$id.";";
        $result = $this->set($sql);
    }  
      
    public function destroy($id) 
    {  
        $sql = "DELETE FROM chapter WHERE MaChapter =".$id.";";
        $result = $this->set($sql); 
    }  
      
}   


?>