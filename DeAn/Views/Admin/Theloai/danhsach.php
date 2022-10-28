<!-- print_r($show); -->
<?php include (ROOT_VIEWS.'Theloai\header.php') ?>

<h3>Danh Sách Thể Loại</h3>
<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Thể Loại</td>
                <td>Thông Tin</td>

                <td>Sửa</td>
                <td>Xóa</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($show); $i++){
                
                echo '<tr>';
                    echo '<td>'.$show[$i]['TenTL'].'</td>';
                    echo '<td>'.$show[$i]['ThongtinTL'].'</td>';

                    echo '<td><a href="?c=admin&a=theloai&e=update&id='.$show[$i]['TenTL'].'">Update</a></td>';
                    echo '<td><a href="?c=admin&a=theloai&e=destroy&id='.$show[$i]['TenTL'].'">Destroy</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php include (ROOT_VIEWS.'Theloai\footer.php') ?>