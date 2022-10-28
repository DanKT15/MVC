
<?php include (ROOT_VIEWS.'Truyen\header.php') ?>

        <h3>Thêm Truyện</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                       Tên Truyện :
                    </td>
                    <td>
                        <input type="text" name="name" value= "<?php //echo $ten ?>" size="50" />      
                    </td>
                </tr>
                <tr>
                    <td>
                       Thông tin Truyện :
                    </td>
                    <td>
                        <input type="text" name="content" value="<?php //echo $ten ?>" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Đăng Ảnh :
                    </td>
                    <td>
                        <input type="file" name="upimg" id=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Tác Giả :
                    </td>
                    <td>
                        <input type="text" name="tacgia" value="<?php //echo $ten ?>" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Nhóm :
                    </td>
                    <td>
                        <input type="text" name="nhom" value= "<?php //echo $ten ?>" size="50" />      
                    </td>
                </tr>
                <tr>
                    <td>
                       Thể Loại :
                    </td>
                    <td>
                        <input type="text" name="theloai" value="<?php //echo $ten ?>" size="50"/>
                    </td>
                </tr>
            </table>
            <input type="submit" name='submit' value="Thêm Truyện" />
        </form>

<?php include (ROOT_VIEWS.'Truyen\footer.php') ?>