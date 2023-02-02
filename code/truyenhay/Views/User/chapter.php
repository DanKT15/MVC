<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>


        <?php

            for($i = 0; $i < count($exchapter); $i++){
                

                    $tenchap = $exchapter[$i]['TenChapter'];
                    $tentruyen = $exchapter[$i]['TenTruyen'];
                    $noidung = $exchapter[$i]['NoiDung'];

            }
            
        ?>




<div class="detail">
    <div class="name">
        <div class="header">
            <a href="#"><h2><?php echo $tentruyen; ?></h2></a>
            <a href="#"><?php echo $tenchap; ?></a>
        </div>

        <div class="icons">
        <i class="uil uil-pen"></i>
        </div><div class="chapter">
            
        </div>
        <hr>
        <p><?php echo $noidung; ?></p>
        <hr>
        <div class="chapter"></div>
        <br>
        <div class="footer_detail"></div>
    </div>
</div>




<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>