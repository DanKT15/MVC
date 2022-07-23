<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    
<button type="button" onclick="quay_lai_trang_truoc()">Quay lại trang trước</button>
    
    <form action="" method="POST">
        <label for="fname">Ho Ten:</label><br>
        <input type="text" name="hoten" id=""><br>
        <label for="fname">Email:</label><br>
        <input type="email" name="email" id=""><br>
        <label for="fname">Mat Khau:</label><br>
        <input type="password" name="pass" id=""><br><br>
        <input type="submit" name="add_user" value="Dang Ky">
    </form>

    <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
</script>
</body>
</html>