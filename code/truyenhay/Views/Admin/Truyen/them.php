<?php include(ROOT_VIEWS . 'Truyen\header.php') ?>

<h3>Thêm Truyện</h3>
<form action="" method="POST" enctype="multipart/form-data">
    <table cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td>
                Tên Truyện :
            </td>
            <td>
                <input type="text" name="name" value="<?php //echo $ten 
                                                        ?>" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Thông tin Truyện :
            </td>
            <td>

                <textarea name="content" id="textarea" cols="30" rows="10"></textarea>
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
    <input type="submit" name='submit' value="Thêm Truyện" />
</form>

<?php
include(ROOT_VIEWS . 'Truyen\right.php');
include(ROOT_VIEWS . 'Truyen\footer.php'); ?>