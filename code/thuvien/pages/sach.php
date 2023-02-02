
<?php

    foreach ($ctsach as $key => $value) {
        $id = $value['id'];
        $hinhanh = $value['hinhanh'];
        $ten = $value['ten'];
        $tacgia = $value['tacgia'];
        $theloai = $value['tentl'];
        $gioithieu = $value['gioithieu'];
    }
?> 

<div id="page">
    <div id="anhsach">
        <img src="<?php echo $path_img.$hinhanh; ?>" alt="anh">
    </div>
    <div id="thongtin">
            <h1><?php echo $ten; ?></h1><br>
            <p>Tác Giả: <?php echo $tacgia; ?></p><br>
            <p>Thể Loại: <a href="index.php?page=theloai&id=<?php echo $theloai; ?>"><?php echo $theloai; ?></a></p>
        <div id="button">
            <a href="index.php?page=sach&id=<?php echo $id; ?>&read">Đọc online</a>
        </div>
    </div>
</div>

<div id="gioithieu">
    <h1><?php echo $ten; ?></h1><br>
    <p><?php echo $gioithieu; ?></p>
</div>
        
