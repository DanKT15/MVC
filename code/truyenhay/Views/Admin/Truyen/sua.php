<?php include(ROOT_VIEWS . 'Truyen\header.php') ?>

<?php

for ($i = 0; $i < count($exshow); $i++) {
    $truyen = $exshow[$i]['TenTruyen'];
    $noidung = $exshow[$i]['GTTruyen'];
}

?>


<h3>Sửa Thông Tin Truyện</h3>
<form action="" method="POST" enctype="multipart/form-data">
    <table cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td>
                Tên Truyện :
            </td>
            <td>
                <input type="text" name="name" value="<?php echo $truyen ?>" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Thông tin Truyện:
            </td>
            <td>
                <input type="text" name="content" value="<?php echo $noidung ?>" size="50" />
            </td>
        </tr>

        <tr>
            <td>
                Đăng Ảnh :
            </td>
            <td>
                <input type="file" name="upimg" id="" />
            </td>
        </tr>
        <tr>
            <td>
                Tác Giả :
            </td>
            <td>
                <select name="tacgia">
                    <?php
                    for ($i = 0; $i < count($showtg); $i++) {
                        echo '<option value="' . $showtg[$i]['TenTG'] . '">' . $showtg[$i]['TenTG'] . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Nhóm :
            </td>
            <td>
                <select name="nhom">
                    <?php
                    for ($i = 0; $i < count($shownhom); $i++) {
                        echo '<option value="' . $shownhom[$i]['TenNhom'] . '">' . $shownhom[$i]['TenNhom'] . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Thể Loại :
            </td>
            <td>
                <select name="theloai">
                    <?php
                    for ($i = 0; $i < count($showtl); $i++) {
                        echo '<option value="' . $showtl[$i]['TenTL'] . '">' . $showtl[$i]['TenTL'] . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" name='submit' value="Sửa Thông Tin" />
</form>

<?php
include(ROOT_VIEWS . 'Truyen\right.php');
include(ROOT_VIEWS . 'Truyen\footer.php'); ?>