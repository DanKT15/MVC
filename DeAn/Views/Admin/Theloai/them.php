
<?php include (ROOT_VIEWS.'Theloai\header.php') ?>

        <h3>Thêm Thể Loại</h3>
        <form action="" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                       Tên Thể Loại :
                    </td>
                    <td>
                        <input type="text" name="name" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                       Thông tin Thể Loại :
                    </td>
                    <td>
                        <input type="text" name="content" size="50"/>
                    </td>
                </tr>
            </table>
            <input type="submit" name='submit' value="Thêm Thể Loại" />
        </form>

<?php include (ROOT_VIEWS.'Theloai\footer.php') ?>