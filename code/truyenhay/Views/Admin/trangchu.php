<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Views/css/admin.css" />

    <title>Trang Admin</title>
</head>

<body>
    <div class="top">
        <div id="menu-top">
            <ul>
                <li><a href="?c=admin&a=nhomdich">Nhóm Dịch</a></li>
                <li><a href="?c=admin&a=tacgia">Tác Giả</a></li>
                <li><a href="?c=admin&a=theloai">Thể Loại</a></li>
                <li><a href="?c=admin&a=truyen">Truyện</a></li>
                <li><a href="?c=admin&a=chapter">Chapter</a></li>
                <li><a href="?c=admin&a=binhluan">Bình Luận</a></li>
                <li><a href="?c=admin&a=user">Thành Viên</a></li>
            </ul>
            <ol>
                <li>
                    <i class='bx bx-log-out'></i>
                    <a href="index.php?c=user&a=quanli&e=dangxuat">Đăng xuất</a>
                </li>
                <li>

                    <a href="index.php?c=user">Về Trang Chủ Truyện</a>
                    <i class='bx bx-home-heart'></i>
                </li>
            </ol>
        </div>
    </div>
    <div id="main">
        <div id="banner">
            <h1>ADMIN TRANG CHỦ</h1>
        </div>
        <div id="main-content">
            <div id="content">
                <div class="dinhdang">
                    <h1>Nội dung</h1>
                    <div id="noidung">Đây là trang admin</div>
                </div>
            </div>
        </div>
        <div id="right">
            <div class="dinhdang">
                <h1>Chức Năng</h1>
                <div id="menu-right"></div>
            </div>
        </div>
    </div>

</body>

</html>