
<?php include (ROOT_VIEWS.'Nhomdich\header-nhom.php') ?>

        <h3>Thêm Nhóm</h3>
        <form action="" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                       Tên Nhóm :
                    </td>
                    <td>
                        <input type="text" name="name" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                       Thông tin Nhóm :
                    </td>
                    <td>
                        <input type="text" name="content" size="50"/>
                    </td>
                </tr>
            </table>
            <input type="submit" name='submit' value="Thêm Nhóm" />
        </form>

<?php include (ROOT_VIEWS.'Nhomdich\footer-nhom.php') ?>