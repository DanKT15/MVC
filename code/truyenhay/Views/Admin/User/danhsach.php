<!-- print_r($show); -->
<?php include (ROOT_VIEWS.'User\header.php') ?>

<h3>Danh Sách Người Dùng</h3>
<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Người Dùng</td>
                <td>Password</td>
                <td>Email</td>
                <td>Level</td>

                <td>Sửa</td>
                <td>Xóa</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($show); $i++){
                
                echo '<tr>';
                    echo '<td>'.$show[$i]['TenUser'].'</td>';
                    echo '<td>'.$show[$i]['Password'].'</td>';
                    echo '<td>'.$show[$i]['Email'].'</td>';
                    echo '<td>'.$show[$i]['Level'].'</td>';

                    echo '<td><a href="?c=admin&a=user&e=update&id='.$show[$i]['TenUser'].'">Update</a></td>';
                    echo '<td><a href="?c=admin&a=user&e=destroy&id='.$show[$i]['TenUser'].'">Destroy</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php 
include (ROOT_VIEWS.'User\right.php');
include (ROOT_VIEWS.'User\footer.php'); 
?>