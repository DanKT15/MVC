<html>

<head>

<title> Phân Trang </title>

</head>

<body>

<?php

// Kết nối database
$conn = mysqli_connect("localhost", "root", "" , "test");

if (!$conn) {

   die("Connection failed" . mysqli_connect_error());

}

else {

   mysqli_select_db($conn, "pagination");

}


// ------------------------------------------------------------------------------------------------------------------------------


// Lấy số trang 
// if (!isset($_GET['page'])) {
    
//     $page = 1;

// } else {

//     $page = $_GET['page'];

// }


if (!isset($_GET['submit'])) {
    
    $page = 1;

} else {

    $page = $_GET['page'];

}


// Tính các phần tử cần thiết
$sophantu = 5;
$tranghientai = ($page-1) * $sophantu;


// Truy vấn phân trang
$query = "SELECT * FROM alphabet LIMIT " . $tranghientai . "," . $sophantu;
$truyvan2 = mysqli_query($conn, $query);


// Hiển thị các cột trong trang đã phân
echo "<h1>Trang số $page</h1>";
while ($row = mysqli_fetch_array($truyvan2)) {

    echo $row["id"] . " " . $row["name"] . "</br>";

}


// ------------------------------------------------------------------------------------------------------------------------------


// Truy vấn tổng phần tử trong bảng
$query = "select * from alphabet";
$truyvan1 = mysqli_query($conn, $query);


// Tính tổng số trang cần phân 
$tongsophantu = mysqli_num_rows($truyvan1);
$tongsotrangcanhienthi = ceil ($tongsophantu / $sophantu);


// Hiển thị danh sách page 
// for($page = 1; $page<= $tongsotrangcanhienthi; $page++) {

//     echo '<a href="phantrang.php?page='.$page.'">'.$page.'</a>';

// }





// path-root
echo dirname(__DIR__)."<br>";

echo basename(dirname(__DIR__))."<br>";

echo $_SERVER['WEB_ROOT'] = str_replace($_SERVER['SCRIPT_NAME'],'',$_SERVER['SCRIPT_FILENAME']);






?>

<form action="" method="get">
    <select name="page">
        <?php
           for($page = 1; $page<= $tongsotrangcanhienthi; $page++) {
               echo '<option value="'.$page.'">'.$page.'</option>';
            }
        ?>
    </select>
    <input type="submit" name="submit" value="Chọn trang">
</form>

</body>

</html>