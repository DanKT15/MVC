<?php
$menu = theloai($conn);
// print_r($menu);

if (!isset($_SESSION)) 
{ 
    session_start();
}
?>

<div id="hleft">
    <a href="index.php"><img src="images/nha-sach-mien-phi-logo-new-11.7.png" alt="name"></a>
</div>
        
<div id="menu">
    <ul>
        <li><a href="index.php">Trang Chủ</a></li>

        <li id="down">
            <a href="index.php?page=sach">Thể Loại</a>

            <ul id="drop">
                <?php 
                    foreach ($menu as $key => $value) {
                        echo '<li><a href="index.php?page=theloai&id='.$value['tentl'].'">'.$value['tentl'].'</a></li>';
                    }
                ?>
            </ul>
            
        </li>

        <?php
           if (isset($_SESSION['user'])) {
              echo '<li id="login"><a href="admin/out.php">Đăng Xuất</a></li>';
           } else {
              echo '<li id="login"><a href="admin/login.php">Đăng Nhập</a></li>';
              echo '<li><a href="admin/dangky.php">Đăng Ký</a></li>';
           }
           
        ?>

        
    </ul>
</div>

