index.php
<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
  $db = new PDO("mysql:host=$servername; dbname=test", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

echo "<br>";
echo "<br>";
echo "<br>";

$stmt = $db->prepare('SELECT id_user, name_user from thanhvien');
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
/*Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);*/
foreach ($resultSet as $row) {
echo $row['id_user'];
echo $row['name_user'];
echo "<br>";
}

?>