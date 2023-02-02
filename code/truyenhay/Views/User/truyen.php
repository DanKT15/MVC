<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>

        <div class="container">
            <div class="content">
                <!-- <div class="content-hot">
                    <a class="title" href="#">TRUYỆN HOT<i class="uil uil-fire"></i></a>
                    <select class="type">

                        <option value="1">Tất Cả</option>
                        <option value="1">...</option>
                        <option value="2">Manga</option>
                       
                    </select>
                </div> -->
                <!-- image -->
                <div class="image">

                    <?php

                        for($i = 0; $i < count($show); $i++){
                                          
                            echo '<div class="image-title">          
                                        <img src="'.$show[$i]['ImgTruyen'].'" alt="truyen">
                                        <a href="index.php?c=user&a=truyen&e=chitiet&id='.$show[$i]['TenTruyen'].'">'.$show[$i]['TenTruyen'].'</a>
                                        
                                    </div>';
                        }
                       
                    ?>

                    
                       
                </div>    
            </div>
        </div>


<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>