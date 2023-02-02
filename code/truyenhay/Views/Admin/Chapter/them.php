<?php include(ROOT_VIEWS . 'Chapter\header.php') ?>

<h3>Thêm Chapter</h3>
<form action="" method="POST" enctype="multipart/form-data">
    <table cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td>
                Tên Chapter :
            </td>
            <td>
                <input type="text" name="namechap" value="" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Truyện :
            </td>
            <td>
                <select name="nametruyen">
                    <?php
                    for ($i = 0; $i < count($showtruyen); $i++) {
                        echo '<option value="' . $showtruyen[$i]['TenTruyen'] . '">' . $showtruyen[$i]['TenTruyen'] . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Nội Dung Truyện:
            </td>
            <td>
                <textarea name="noidung" id="textarea" cols="30" rows="20"></textarea>
            </td>
        </tr>
    </table>
    <input type="submit" name='submit' value="Thêm Chapter" />
</form>

<?php
include(ROOT_VIEWS . 'Chapter\right.php');
include(ROOT_VIEWS . 'Chapter\footer.php'); ?>