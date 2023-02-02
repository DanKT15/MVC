<!-- print_r($show); -->
<?php include(ROOT_VIEWS . 'Truyen\header.php') ?>

<h3>Danh Sách Truyện</h3>
<table cellpadding="0" cellspacing="0" border="1">
    <thead>
        <tr>
            <td>Tên Truyện</td>
            <td>Thông Tin</td>
            <td>Đường Dẫn</td>
            <td>Tác Giả</td>
            <td>Nhóm</td>
            <td>Thể Loại</td>

            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
    </thead>
    <tbody>
        <?php

        for ($i = 0; $i < count($show); $i++) {

            echo '<tr>';
            echo '<td>' . $show[$i]['TenTruyen'] . '</td>';
            echo '<td>' . $show[$i]['GTTruyen'] . '</td>';
            echo '<td>' . $show[$i]['ImgTruyen'];
            echo '<td>' . $show[$i]['TenTG'] . '</td>';
            echo '<td>' . $show[$i]['TenNhom'] . '</td>';
            echo '<td>' . $show[$i]['TenTL'] . '</td>';

            echo '<td><a href="?c=admin&a=truyen&e=update&id=' . $show[$i]['TenTruyen'] . '">Update</a></td>';
            echo '<td><a href="?c=admin&a=truyen&e=destroy&id=' . $show[$i]['TenTruyen'] . '">Destroy</a></td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

<?php

for ($i = 0; $i < count($show); $i++) {

    echo "<img src='" . $show[$i]['ImgTruyen'] . "' alt='Chap 3' width = '180' height = '180'>";
}

?>

<?php
include(ROOT_VIEWS . 'Truyen\right.php');
include(ROOT_VIEWS . 'Truyen\footer.php'); ?>