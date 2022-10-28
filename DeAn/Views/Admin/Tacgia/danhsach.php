<!-- print_r($show); -->
<?php include (ROOT_VIEWS.'Tacgia\header.php') ?>

<h3>Danh Sách Tác Giả</h3>
<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Tác Giả</td>
                <td>Thông Tin</td>

                <td>Sửa</td>
                <td>Xóa</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($show); $i++){
                
                echo '<tr>';
                    echo '<td>'.$show[$i]['TenTG'].'</td>';
                    echo '<td>'.$show[$i]['ThongtinTG'].'</td>';

                    echo '<td><a href="?c=admin&a=tacgia&e=update&id='.$show[$i]['TenTG'].'">Update</a></td>';
                    echo '<td><a href="?c=admin&a=tacgia&e=destroy&id='.$show[$i]['TenTG'].'">Destroy</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php include (ROOT_VIEWS.'Tacgia\footer.php') ?>