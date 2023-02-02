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

                        if (isset($timkiem) && !empty($timkiem)) 
                        {
                            for($i = 0; $i < count($timkiem); $i++){
                                        
                                echo '<img src="'.$timkiem[$i]['ImgTruyen'].'" alt="truyen">';
                                echo '<a href="index.php?c=user&a=truyen&e=chitiet&id='.$timkiem[$i]['TenTruyen'].'">'.$timkiem[$i]['TenTruyen'].'</a>';
                                echo '<div class="stars">
                                    <i class=" star uil uil-star"></i>
                                    <i class=" star uil uil-star"></i>
                                    <i class=" star uil uil-star"></i>
                                    <i class="star uil uil-star"></i>
                                    <i class="star uil uil-star"></i>
                                 </div>';
                            }
                        }
                        else 
                        {
                            echo 'Có 0 kết quả được tìm thấy !!!';
                        } 
                       
                    ?>
                    </div>
                </div>                                
            </div>
        </div>

<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>