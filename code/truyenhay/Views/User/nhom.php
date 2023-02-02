<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>

<h1>NHÓM</h1>

<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Nhóm</td>
                <td>Thông Tin</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($exshow); $i++){
                
                echo '<tr>';
                    echo '<td>'.$exshow[$i]['TenNhom'].'</td>';
                    echo '<td>'.$exshow[$i]['ThongtinNhom'].'</td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>