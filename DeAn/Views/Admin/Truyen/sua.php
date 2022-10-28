
<?php include (ROOT_VIEWS.'Truyen\header.php') ?>
        
        <?php 

            for ($i=0; $i < count($exshow); $i++) { 

                $ten = $exshow[$i]['TenTruyen'];
                $tt = $exshow[$i]['GTTruyen'];
                $tg = $exshow[$i]['TenTG'];
                $nhom = $exshow[$i]['TenNhom'];
                $tl = $exshow[$i]['TenTL'];

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
                        <input type="text" name="name" value= "<?php echo $ten ?>" size="50" />      
                    </td>
                </tr>
                <tr>
                    <td>
                       Thông tin Truyện :
                    </td>
                    <td>
                        <input type="text" name="content" value="<?php echo $tt ?>" size="50"/>
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
                        <input type="text" name="tacgia" value="<?php echo $tg ?>" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Nhóm :
                    </td>
                    <td>
                        <input type="text" name="nhom" value= "<?php echo $nhom ?>" size="50" />      
                    </td>
                </tr>
                <tr>
                    <td>
                       Thể Loại :
                    </td>
                    <td>
                        <input type="text" name="theloai" value="<?php echo $tl ?>" size="50"/>
                    </td>
                </tr>
            </table>
            <input type="submit" name='submit' value="Sửa Thông Tin" />
        </form>

<?php include (ROOT_VIEWS.'Truyen\footer.php') ?>