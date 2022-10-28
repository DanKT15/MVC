<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>

<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Chapter</td>
                <td>Truyện</td>
                <td>Nội Dung truyện</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($exchapter); $i++){
                
                echo '<tr>';
                    echo '<td>'.$exchapter[$i]['TenChapter'].'</td>';
                    echo '<td>'.$exchapter[$i]['TenTruyen'].'</td>';
                    echo '<td>'.$exchapter[$i]['NoiDung'].'</td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>


<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>