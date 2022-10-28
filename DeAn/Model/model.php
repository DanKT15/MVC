<?php

include_once("Model/db.php"); 

class model extends db {  


    public function __construct()
    {
        $this->conn = new db();
    }

    public function get($sql) 
    {   
        $result = $this->conn->connect()->query($sql);
        if ($this->conn->connect()->query($sql) === FALSE) {
            echo "Error: ".$sql."<br>".$this->connect()->error;
        } 
        $data  = array();
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }  
      
    public function set($sql)  
    {  
        if ($this->conn->connect()->query($sql) === TRUE) {
            echo "Edit successfully";
        } else {
            echo "Error: ".$sql."<br>".$this->connect()->error;
        }
    }
    
}   


?>