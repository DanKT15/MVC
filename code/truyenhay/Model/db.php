<?php

class db { 

  public function connect() 
  {    
        // Create connection
    $conn = new mysqli("localhost", "root", "", "webtruyen");
        
        // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;   

  }

}
