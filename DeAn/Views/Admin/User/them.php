
<?php include (ROOT_VIEWS.'User\header.php') ?>

        <h3>Thêm Người Dùng</h3>
        <form action="" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
            <tr>
                    <td>
                       Tên Người Dùng :
                    </td>
                    <td>
                        <input type="text" name="name" value= "<?php //echo $ten ?>" size="50" />      
                    </td>
                </tr>
                <tr>
                    <td>
                       Password :
                    </td>
                    <td>
                        <input type="text" name="Pass" value="<?php //echo $ten ?>" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Email :
                    </td>
                    <td>
                        <input type="text" name="email" value= "<?php //echo $ten ?>" size="50" />      
                    </td>
                </tr>
                <tr>
                    <td>
                       Level :
                    </td>
                    <td>
                        <input type="text" name="level" value="<?php //echo $ten ?>" size="50"/>
                    </td>
                </tr>
            </table>
            <input type="submit" name='submit' value="Thêm ..." />
        </form>

<?php include (ROOT_VIEWS.'User\footer.php') ?>