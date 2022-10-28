<!-- <?php print_r($show); ?> -->

<?php include (ROOT_VIEWS.'Nhomdich\header-nhom.php') ?>

<h3>Danh Sách Nhóm</h3>
<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Nhóm</td>
                <td>Thông Tin</td>
                
                <td>Sửa</td>
                <td>Xóa</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($show); $i++){
                
                echo '<tr>';
                    echo '<td>'.$show[$i]['TenNhom'].'</td>';
                    echo '<td>'.$show[$i]['ThongtinNhom'].'</td>';

                    echo '<td><a href="?c=admin&a=nhomdich&e=update&id='.$show[$i]['TenNhom'].'">Update</a></td>';
                    echo '<td><a href="?c=admin&a=nhomdich&e=destroy&id='.$show[$i]['TenNhom'].'">Destroy</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php include (ROOT_VIEWS.'Nhomdich\footer-nhom.php') ?>


<?php 
// echo __DIR__ . "<br>";
//  output: C:xampphtdocsMyFolder
// echo dirname(__DIR__) . "<br>" ;
//  output: C:xampphtdocs
// echo __FILE__ . "<br>";
//  output: C:xampphtdocsMyFoldermyFile.php
// echo dirname(__FILE__);
//  output: C:xampphtdocsMyFolder
?>