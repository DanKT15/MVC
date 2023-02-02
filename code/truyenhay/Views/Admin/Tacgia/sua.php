<?php include(ROOT_VIEWS . 'Tacgia\header.php') ?>

<?php

for ($i = 0; $i < count($exshow); $i++) {

    $ten = $exshow[$i]['TenTG'];
    $tt = $exshow[$i]['ThongtinTG'];
}

?>

<h3>Sửa Thông Tin Tác Giả</h3>
<form action="" method="POST">
    <table cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td>
                Tên Tác Giả :
            </td>
            <td>
                <input type="text" name="name" value="<?php echo $ten ?>" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Thông tin Tác Giả :
            </td>
            <td>
                <input type="text" name="content" value="<?php echo $tt ?>" size="50" />
            </td>
        </tr>
    </table>
    <input type="submit" name='submit' value="Sửa Thông Tin" />
</form>

<?php
include(ROOT_VIEWS . 'Tacgia\right.php');
include(ROOT_VIEWS . 'Tacgia\footer.php'); ?>