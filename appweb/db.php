<?php
class db {

  private $conn;

  function connect() {
    global $conn;
    $conn = mysqli_connect("localhost", "root", "", "test");
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully"."<br>";
  }

  function close() {
    global $conn;
    if ($conn) {
      mysqli_close($conn);
      // echo "Disconnected";
    } 
  }

  // Thêm, sửa, xóa
  function db_execute($sql){
    $this->connect();
    global $conn;
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
  }
  
  // Xuất 
  function db_get_list($sql){
    $this->connect();
    global $conn;
    $data  = array();
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
  }


}



//---------------Xóa------------------------------------------------------------
// $sql = "DELETE FROM user WHERE id_user=02";

// if (mysqli_query($conn, $sql)) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . mysqli_error($conn);
// }




//---------------Sửa------------------------------------------------------------
// $sql = "UPDATE user SET name_user='jond' WHERE id_user=01";

// if (mysqli_query($conn, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }




// ---------------thêm-----------------------------------------------------------
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }




//---------------Xem------------------------------------------------------------
// $sql = "SELECT * FROM admin";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - email: " . $row["email"]. " - password: " . $row["password"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }


?>
