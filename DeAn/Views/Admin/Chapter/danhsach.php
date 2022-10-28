<!-- print_r($show); -->
<?php include (ROOT_VIEWS.'Chapter\header.php') ?>

<h3>Danh Sách Chapter</h3>
<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Mã Chapter</td>
                <td>Tên Chapter</td>
                <td>Truyện</td>
                <td>Nội Dung truyện</td>

                <td>Sửa</td>
                <td>Xóa</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($show); $i++){
                
                echo '<tr>';
                    echo '<td>'.$show[$i]['MaChapter'].'</td>';
                    echo '<td>'.$show[$i]['TenChapter'].'</td>';
                    echo '<td>'.$show[$i]['TenTruyen'].'</td>';
                    echo '<td>'.$show[$i]['NoiDung'].'</td>';

                    echo '<td><a href="?c=admin&a=chapter&e=update&id='.$show[$i]['MaChapter'].'">Update</a></td>';
                    echo '<td><a href="?c=admin&a=chapter&e=destroy&id='.$show[$i]['MaChapter'].'">Destroy</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php include (ROOT_VIEWS.'Chapter\footer.php') ?>