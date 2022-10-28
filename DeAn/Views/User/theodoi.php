<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>

<h1>THEO DÕI</h1>

<?php if(isset($_SESSION['username']) || isset($_SESSION['admin'])) { ?>

    <div class="container">
        <div class="content">
                <div class="content-hot">
                    <!-- <a class="title" href="#">TRUYỆN HOT<i class="uil uil-fire"></i></a> -->
                </div>
                <!-- image -->
                <div class="image">
                    <div class="image-title">

                    <?php
                        
                        if (isset($show) && !empty($show)) 
                        {
                            for($i = 0; $i < count($show); $i++){
                                          
                                echo '<img src="'.$show[$i]['ImgTruyen'].'" alt="truyen">';
                                echo '<a href="index.php?c=user&a=truyen&e=chitiet&id='.$show[$i]['TenTruyen'].'">'.$show[$i]['TenTruyen'].'</a>';
                            }
                        }
                        else 
                        {
                            echo 'Chưa theo dõi truyện nào !!!';
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

<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>