<button type="button" onclick="quay_lai_trang_truoc()">Quay lại trang trước</button>
<table>  
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>password</td>
            </tr>
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($bangct); $i++){
                         
                echo '<tr>';
                    echo '<td>'.$bangct[$i]['id_user'].'</td>';
                    echo '<td>'.$bangct[$i]['name_user'].'</td>';
                    echo '<td>'.$bangct[$i]['email_user'].'</td>';
                    echo '<td>'.$bangct[$i]['password_user'].'</td>';
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