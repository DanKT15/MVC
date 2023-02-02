<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>
<div class="theloai">
<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Thể Loại</td>
                <td>Thông Tin</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($exshow); $i++){
                
                echo '<tr>';
                    echo '<td>'.$exshow[$i]['TenTL'].'</td>';
                    echo '<td>'.$exshow[$i]['ThongtinTL'].'</td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<div class="container">
            <div class="content">
                <div class="content-hot"></div>
                <!-- image -->
                <div class="image">

                    <?php
                                          
                            for($i = 0; $i < count($showtruyen); $i++){
                                          
                                echo '<div class="image-title">          
                                            <img src="'.$showtruyen[$i]['ImgTruyen'].'" alt="truyen">
                                            <a href="index.php?c=user&a=truyen&e=chitiet&id='.$showtruyen[$i]['TenTruyen'].'">'.$showtruyen[$i]['TenTruyen'].'</a>
                                            <div class="stars">
                                                <i class=" star uil uil-star"></i>
                                                <i class=" star uil uil-star"></i>
                                                <i class=" star uil uil-star"></i>
                                                <i class="star uil uil-star"></i>
                                                <i class="star uil uil-star"></i>
                                            </div>
                                        </div>';
                            }
                       
                    ?>
                       
                </div>
            </div>
        </div>
</div>
<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>