
<?php include (ROOT_VIEWS.'Tacgia\header.php') ?>

        <h3>Thêm Tác Giả</h3>
        <form action="" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                       Tên Tác Giả :
                    </td>
                    <td>
                        <input type="text" name="name" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                       Thông tin Tác Giả :
                    </td>
                    <td>
                    <textarea name="content" id="textarea" cols="30" rows="10"></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" name='submit' value="Thêm Tác Giả" />
        </form>

<?php 
include (ROOT_VIEWS.'Tacgia\right.php');
include (ROOT_VIEWS.'Tacgia\footer.php'); ?>