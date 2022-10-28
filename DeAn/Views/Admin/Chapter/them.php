
<?php include (ROOT_VIEWS.'Chapter\header.php') ?>

        <h3>Thêm Chapter</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="1">
            <tr>
                    <td>
                       Tên Chapter :
                    </td>
                    <td>
                        <input type="text" name="namechap" value= "<?php //echo $chapter ?>" size="50" />      
                    </td>
                </tr>
                <tr>
                    <td>
                       Truyện :
                    </td>
                    <td>
                        <input type="text" name="nametruyen" value="<?php //echo $truyen ?>" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Nội Dung Truyện :
                    </td>
                    <td>
                        <input type="text" name="noidung" value="<?php //echo $noidung ?>" size="50"/>
                    </td>
                </tr>
            </table>
            <input type="submit" name='submit' value="Thêm Chapter" />
        </form>

<?php include (ROOT_VIEWS.'Chapter\footer.php') ?>