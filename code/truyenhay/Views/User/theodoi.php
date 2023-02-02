<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>
<div class="theodoi">
<h1>THEO DÕI</h1>

<?php if(isset($_SESSION['username']) || isset($_SESSION['admin'])) { ?>

    <div class="container">
        <div class="content">
                <div class="content-hot"></div>
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
                                           <a href="index.php?c=user&a=theodoi&del='.$show[$i]['MaTD'].'">Bỏ theo dõi</a>
                                        </div>
                                    </div>';
                            }
                        }
                        else 
                        {
                            echo '<div class="image-title">          
                                       <p>Chưa theo dõi truyện nào</p> 
                                    </div>';
                            echo '';
                        } 
                        
                    ?>

                    <!-- <div class="image-title">
                        <img src="img/3.jpg" alt="">
                        <a href="#">THẦN CẤP Ở RỂ</a>
                        <div class="stars">
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                        </div>
                    </div>
                    <div class="image-title">
                        <img src="img/3.jpg" alt="">
                        <a href="#">THẦN CẤP Ở RỂ</a>
                        <div class="stars">
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                        </div>
                    </div> -->

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