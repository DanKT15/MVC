<?php

class DB {

    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'test';
    
    private $conn = NULL;

    public function connect(){
        $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        if (!$this->conn){
           echo 'connect fail';
           exit();
        }

        return $this->conn;
    }
    
    function close() {
        if ($conn) {
        mysqli_close($conn);
        // echo "Disconnected";
        } 
    }

    // Thêm, sửa, xóa
    function db_execute($sql){
        $this->connect();
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
    
    // Xuất 
    function db_get_list($sql){
        $this->connect();
        $data  = array();
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

}

?>