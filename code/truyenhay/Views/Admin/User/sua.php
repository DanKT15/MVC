
<?php include (ROOT_VIEWS.'User\header.php') ?>
        
        <?php 

            for ($i=0; $i < count($exshow); $i++) { 

                $ten = $exshow[$i]['TenUser'];
                $pass = $exshow[$i]['Password'];
                $email = $exshow[$i]['Email'];
                $level = $exshow[$i]['Level'];

            }

        ?>

        <h3>Sửa Thông Tin Người Dùng</h3>
        <form action="" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                       Tên Người Dùng :
                    </td>
                    <td>
                        <input type="text" name="name" value= "<?php echo $ten ?>" size="50" />      
                    </td>
                </tr>
                <tr>
                    <td>
                       Password :
                    </td>
                    <td>
                        <input type="text" name="Pass" value="<?php echo $pass ?>" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Email :
                    </td>
                    <td>
                        <input type="text" name="email" value= "<?php echo $email ?>" size="50" />      
                    </td>
                </tr>
                <tr>
                    <td>
                       Level :
                    </td>
                    <td>
                        <input type="text" name="level" value="<?php echo $level ?>" size="50"/>
                    </td>
                </tr>
            </table>
            <input type="submit" name='submit' value="Sửa Thông Tin" />
        </form>

<?php 
include (ROOT_VIEWS.'User\right.php');
include (ROOT_VIEWS.'User\footer.php'); ?>