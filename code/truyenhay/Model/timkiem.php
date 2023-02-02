<?php

include_once("Model/model.php");

class timkiem extends model {   

    public function search($content) 
    {  
        $sql = "SELECT * 
                FROM truyen t
                WHERE t.TenTruyen LIKE '%".$content."%' OR t.TenTG LIKE '%".$content."%' OR t.TenNhom LIKE '%".$content."%' OR t.TenTL LIKE '%".$content."%';";
        $result = $this->get($sql);
        return $result;
    }  
      
}   


?>