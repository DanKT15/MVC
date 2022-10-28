<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>

<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Truyện</td>
                <td>Thông Tin</td>
                <td>Đường Dẫn</td>
                <td>Tác Giả</td>
                <td>Nhóm</td>
                <td>Thể Loại</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($exshow); $i++){
                
                echo '<tr>';
                    echo '<td>'.$exshow[$i]['TenTruyen'].'</td>';
                    echo '<td>'.$exshow[$i]['GTTruyen'].'</td>';
                    echo '<td><img src="'.$exshow[$i]['ImgTruyen'].'" alt="truyen"></td>';
                    echo '<td><a href="index.php?c=user&a=tacgia&e=chitiet&id='.$exshow[$i]['TenTG'].'">'.$exshow[$i]['TenTG'].'</a></td>';
                    echo '<td><a href="index.php?c=user&a=nhomdich&e=chitiet&id='.$exshow[$i]['TenNhom'].'">'.$exshow[$i]['TenNhom'].'</a></td>';
                    echo '<td><a href="index.php?c=user&a=theloai&e=chitiet&id='.$exshow[$i]['TenTL'].'">'.$exshow[$i]['TenTL'].'</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>



<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Tên Chapter</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($showchapter); $i++){
                
                echo '<tr>';
                    echo '<td><a href="index.php?c=user&a=truyen&e=exchapter&id='.$showchapter[$i]['MaChapter'].'">'.$showchapter[$i]['TenChapter'].'</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php  

    if (isset($_SESSION['username']) || isset($_SESSION['admin']))
    {
        
        echo   '<form action="" method="POST">
                <table cellpadding="0" cellspacing="0" border="1">
                    <tr>
                        <td>
                        Tên :
                        </td>
                        <td>
                            <input type="text" name="name" size="50" value="'.$_SESSION['username'].'" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Nội dung bình luận :
                        </td>
                        <td>
                            <input type="text" name="noidung" size="50"/>
                        </td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="đăng bình luận" />
            </form>';
        
    }

?>

<table cellpadding="0" cellspacing="0" border="1">  
        <thead>
            <tr>
                <td>Người Dùng</td>
                <td>Nội Dung Bình Luận</td>
            </tr> 
        </thead>
        <tbody>
        <?php  
            
            for($i = 0; $i < count($showbinhluan); $i++){
                
                echo '<tr>';
                    echo '<td>'.$showbinhluan[$i]['TenUser'].'</td>';
                    echo '<td>'.$showbinhluan[$i]['NoiDungBL'].'</td>';
                echo '</tr>';
            }
        ?>
        </tbody>  
</table>

<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>

