<?php
if (isset($_GET['page']) && $_GET['page'] == 'theloai') {
    if (isset($_GET['id'])) {
        $content = $_GET['id'];
    }
}
else {
    $content = 'Tất cả sách';
}
?>


<div class="name"><?php echo $content; ?></div>
<div class="content">

    <?php
        foreach ($sach as $key => $value) {
            echo '<div class="box">
                    <div class="img">
                        <a href="index.php?page=sach&id='.$value['id'].'"><img src="'. $path_img . $value['hinhanh'] .'" alt="name"></a>
                     </div>
                    <div class="namesach">
                        <a href="index.php?page=sach&id='.$value['id'].'">'.$value['ten'].'</a>
                     </div>
                </div> ';
        }
    ?>
    
</div>