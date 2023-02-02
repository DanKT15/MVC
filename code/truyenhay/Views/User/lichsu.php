<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>
<div class="lichsu">
<h1>LỊCH SỬ</h1>

<?php if(isset($_SESSION['username']) || isset($_SESSION['admin'])) { ?>

    <div class="container">
        <div class="content">
                <div class="content-hot">
                    <!-- <a class="title" href="#">TRUYỆN HOT<i class="uil uil-fire"></i></a> -->
                </div>
                <!-- image -->
                <div class="image">

                    <?php
                        
                        if (isset($show) && !empty($show)) 
                        {
                            for($i = 0; $i < count($show); $i++){
                                          
                                echo '<div class="image-title">          
                                        <img src="'.$show[$i]['ImgTruyen'].'" alt="truyen">
                                        <a href="index.php?c=user&a=truyen&e=chitiet&id='.$show[$i]['TenTruyen'].'">'.$show[$i]['TenTruyen'].'</a>
                                        <div class="stars">
                                            <i class=" star uil uil-star"></i>
                                            <i class=" star uil uil-star"></i>
                                            <i class=" star uil uil-star"></i>
                                            <i class="star uil uil-star"></i>
                                            <i class="star uil uil-star"></i>
                                        </div>
                                    </div>';
                            }
                        }
                        else 
                        {
                            echo 'Chưa có thông tin lịch sử!!!';
                        } 
                        
                    ?>

                </div>
            </div>
        </div>

<?php

} 
else 
{
    echo 'Chưa Đăng Nhập !!!'.'<br>';
    echo 'Vui Lòng Đăng Nhập';
}

?>
</div>
<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>