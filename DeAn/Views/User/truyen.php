<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>

        <div class="container">
            <div class="content">
                <div class="content-hot">
                    <a class="title" href="#">TRUYỆN HOT<i class="uil uil-fire"></i></a>
                    <select class="type">

                        <option value="1">Tất Cả</option>
                        <option value="1">...</option>
                       
                    </select>
                </div>
                <!-- image -->
                <div class="image">
                    <div class="image-title">

                    <?php

                        for($i = 0; $i < count($show); $i++){
                                          
                            echo '<img src="'.$show[$i]['ImgTruyen'].'" alt="truyen">';
                            echo '<a href="index.php?c=user&a=truyen&e=chitiet&id='.$show[$i]['TenTruyen'].'">'.$show[$i]['TenTruyen'].'</a>';
                            echo '<div class="stars">
                                    <i class=" star uil uil-star"></i>
                                    <i class=" star uil uil-star"></i>
                                    <i class=" star uil uil-star"></i>
                                    <i class="star uil uil-star"></i>
                                    <i class="star uil uil-star"></i>
                                 </div>';
                        }
                       
                    ?>
                       
                </div>

                <div class="image-title">
                        <img src="img/2.jpg" alt="">
                        <a href="#">TRU TIÊN</a>
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
                    </div>
                    <div class="image-title">
                        <img src="img/4.jpg" alt="">
                        <a href="#">TRANH BÁ THIÊN HẠ</a>
                        <div class="stars">
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                        </div>
                    </div>
                    <div class="image-title">
                        <img src="img/5.jpg" alt="">
                        <a href="#">LINH VŨ THIÊN HẠ</a>
                        <div class="stars">
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                        </div>
                    </div>
                    <div class="image-title">
                        <img src="img/6.jpg" alt="">
                        <a href="#">MA ĐẠO CỔ SƯ- CỔ ĐẠI</a>
                        <div class="stars">
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                        </div>
                    </div>
                    <div class="image-title">
                        <img src="img/7.jpg" alt="">
                        <a href="#">CHÚA ĐẢO XA</a>
                        <div class="stars">
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                        </div>
                    </div>
                    <div class="image-title">
                        <img src="img/8.jpg" alt="">
                        <a href="#">THÔN PHỆ TINH KHÔNG</a>
                        <div class="stars">
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class=" star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                            <i class="star uil uil-star"></i>
                        </div>
                    </div>
               
                    
            </div>
        </div>


<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>