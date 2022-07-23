<?php

// require ('db.php');

// $a = new db();
// $a->connect();

// $a->db_execute(
// "INSERT INTO user (id_user, name_user, email_user, password_user)
// VALUES ('02', 'Doe', 'john@example.com', 'dankt150272283')"
// );

// $bang = $a->db_get_list("SELECT * FROM Thanhvien");

// $bang = $a->db_get_list("SELECT * FROM Thanhvien WHERE name_user LIKE '%admin%'");
// print_r($bang);
?>
<button type="button" onclick="quay_lai_trang_truoc()">Quay lại trang trước</button>
<table>  
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($bang); $i++){
                
                echo '<tr>';
                    echo '<td>'.$bang[$i]['id_user'].'</td>';
                    echo '<td><a href="?c=viewlist&a='.$bang[$i]['name_user'].'">'.$bang[$i]['name_user'].'</a></td>';
                echo '</tr>';
            
            }
         ?>
        </tbody>  
</table>  

<script>
      function quay_lai_trang_truoc(){
          history.back();
      }
</script>

