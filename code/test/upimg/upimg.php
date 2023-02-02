<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>up-img</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
    Chọn file để upload:
    <input type="file" name="fileupload" id="">
    Đặt tên file:
    <input type="text" name="imgname" value="">
    <input type="submit" value="Đăng ảnh" name="submit">
</form>

    <?php

        if (isset($_POST['submit'])){

            $file = $_FILES['fileupload'];
            $text = $_POST['imgname'];
            
            // echo "<pre>";
            // var_dump($file);
            // echo "</pre>";

            $fileName = $_FILES['fileupload']['name'];
            $fileErro = $_FILES['fileupload']['error'];
            // Địa chỉ lưu tạm trên server
            $filetmp = $_FILES['fileupload']['tmp_name'];
 
            // chuyển một chuỗi sang một mảng dựa trên các ký tự phân cách
            $fileExt = explode('.', $fileName);
          
            //trả về chuỗi với tất cả cá kí tự là in thường và Lấy kiểu file ở cuối mãng $fileExt
            $fileType = strtolower(end($fileExt));

            // Kiểu file được phép upload lên server
            $allows = array('jpg', 'jpeg', 'png', 'pdf', 'gif');
            
            // Kiểm tra xem kiểu file có khớp trong danh sách cho phép hay không
            if (in_array($fileType, $allows)){
                // Kiểm tra lỗi ảnh khi tải lên
                if ($fileErro === 0){
                    // Tạo ra file mới với cách đặt tên cho trước
                    $fileNew = $text . "." . $fileType;
                    // Lưu file vào folder 
                    $fileSave = 'upload/' . $fileNew;
                    move_uploaded_file($filetmp, $fileSave);
                    echo '<p>Upload file thành công</p>';
                }
                else{
                    echo '<p "color:red" >File không thể upload do có lỗi</p>';
                }
            } 
            else{
                echo '<p "color:red" >File không thể upload do kiểu file không đúng</p>';
            }

        } 
        else{
            exit();
        }
           
    ?>

</body>
</html>