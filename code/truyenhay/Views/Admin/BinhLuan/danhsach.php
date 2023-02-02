<!-- print_r($show); -->
<?php include (ROOT_VIEWS.'BinhLuan\header.php') ?>

<h3>Danh Sách Bình Luận</h3>
<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Mã Bình Luận</td>
                <td>Người Dùng</td>
                <td>Truyện</td>
                <td>Nội Dung Bình Luận</td>

                <td>Xóa</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($show); $i++){
                
                echo '<tr>';
                    echo '<td>'.$show[$i]['MaBL'].'</td>';
                    echo '<td>'.$show[$i]['TenUser'].'</td>';
                    echo '<td>'.$show[$i]['TenTruyen'].'</td>';
                    echo '<td>'.$show[$i]['NoiDungBL'].'</td>';

                    echo '<td><a href="?c=admin&a=binhluan&e=destroy&id='.$show[$i]['MaBL'].'">Destroy</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php include (ROOT_VIEWS.'BinhLuan\footer.php') ?>