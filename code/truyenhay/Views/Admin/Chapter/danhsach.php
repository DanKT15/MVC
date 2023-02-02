<!-- print_r($show); -->
<?php include(ROOT_VIEWS . 'Chapter\header.php'); 
// print_r($showtruyen);
?>

<h3>Danh Sách Chapter</h3>

<form action="" method="POST">
    <select name="truyen">
        <?php
            for ($i = 0; $i < count($showname); $i++) {
                echo '<option value="' . $showname[$i]['TenTruyen'] . '">' . $showname[$i]['TenTruyen'] . '</option>';
            }
        ?>
    </select>
    <input type="submit" name="submit" value="Chọn truyện">
</form>

<table cellpadding="0" cellspacing="0" border="1">
    <thead>
        <tr>
            <td>Mã Chapter</td>
            <td>Tên Chapter</td>
            <td>Nội Dung truyện</td>

            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
    </thead>
    <tbody>
        <?php
            
            if (isset($showtruyen) && !empty($showtruyen)) 
            {
                for ($i = 0; $i < count($showtruyen); $i++) {

                    echo '<tr>';
                    echo '<td>' . $showtruyen[$i]['MaChapter'] . '</td>';
                    echo '<td>' . $showtruyen[$i]['TenChapter'] . '</td>';
                    echo '<td>' . $showtruyen[$i]['NoiDung'] . '</td>';
    
                    echo '<td><a href="?c=admin&a=chapter&e=update&id=' . $showtruyen[$i]['MaChapter'] . '">Update</a></td>';
                    echo '<td><a href="?c=admin&a=chapter&e=destroy&id=' . $showtruyen[$i]['MaChapter'] . '">Destroy</a></td>';
                    echo '</tr>';
                }
            }
            else {
                echo '<tr>';
                    echo '<td>Chưa có chapter!!!</td>';
                echo '</tr>';
            }
            
        ?>
    </tbody>
</table>

<?php
include(ROOT_VIEWS . 'Chapter\right.php');
include(ROOT_VIEWS . 'Chapter\footer.php');
?>