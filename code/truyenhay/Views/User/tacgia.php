<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>

<h1>TÁC GIẢ</h1>

<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Tác Giả</td>
                <td>Thông Tin</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($exshow); $i++){
                
                echo '<tr>';
                    echo '<td>'.$exshow[$i]['TenTG'].'</td>';
                    echo '<td>'.$exshow[$i]['ThongtinTG'].'</td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>