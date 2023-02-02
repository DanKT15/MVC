<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="Views/css/menu.css">
    <link rel="stylesheet" href="Views/css/container.css">
    <link rel="stylesheet" href="Views/css/stylectt.css">
    <link rel="stylesheet" href="Views/css/chitiet.css">
    <title>truyenfull</title>
</head>
<body>
    <style>
        .footer{
    width: 100%;
    display: flex;
    border-top: 1px solid #282828;
    margin-bottom: 50px;
    text-align: center;

}
    </style>
    <div class="layout">
        <div class="banner">
                <img src="Views/Admin/Truyen/img/banner1.jpg" alt="">
        </div>
        <!-- top -->
        <div class="main">
            <div class="menu">
                <ul class="main-menu">
                    <img src="Views/Admin/Truyen/img/logo.jpg" alt="">
                
                    <li><a class="nav__content" href="index.php?c=user"><i class="uil uil-estate"></i>Trang Chủ</a></li>
                    
                    <li class="nav__item">
                        <a class="nav__content" href="#"><i class="uil uil-pricetag-alt"></i>Thể Loại<i class="uil uil-angle-down"></i></a>
                        <ul class="subnav">
                        <?php  
                            
                            for($i = 0; $i < count($showtl); $i++){
                                
                                    echo '<li><a href="?c=user&a=theloai&e=chitiet&id='.$showtl[$i]['TenTL'].'"><i class="uil uil-tag"></i>'.$showtl[$i]['TenTL'].'</a></li>';
                            }

                        ?>         
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a class="nav__content" href="#home"><i class="uil uil-apps"></i>Chức Năng<i class="uil uil-angle-down"></i></a>
                        <ul class="subnav">
                            <li><a href="index.php?c=user&a=theodoi"><i class="uil uil-book"></i>Truyện theo dõi</a></li>
                            <li><a href="index.php?c=user&a=lichsu"><i class="uil uil-book"></i>Lịch sử đọc truyện</a></li>
                        </ul>
                    </li> 
                    <!-- <li class="nav__item">
                        <a class="nav__content" href="#home"><i class="uil uil-lightbulb-alt"></i>Giao Diện<i class="uil uil-angle-down"></i></a>
                        <div class="subnav">
                            <div class="title">
                                <label for="module">Chế độ ban đêm</label>
                            </div>

                            <div class="choose-module">
                                
                                    <div>
                                        <input class="module-input" type="radio" id="male" name="module" required>
                                    Có
                                    </div>
                                

                                <div>
                                    <input class="module-input" type="radio" id="female" name="module" required>
                                    Không
                            </div>
                            </div>
                        </div>
                    </li> -->
                    <li class="title-login">
                        <div class="login">
                            <?php
                                if (isset($_SESSION['username'])&&$_SESSION['username']){
                                    echo '<button onclick="dangxuat()">Đăng xuất</button>';                          
                                }    
                                elseif (isset($_SESSION['admin'])&&$_SESSION['admin']){
                                    echo '<button onclick="admin()">Admin</button>'; 
                                    echo '<button onclick="dangxuat()">Đăng xuất</button>';                          
                                }
                                else {
                                    echo '<button onclick="dangky()">Đăng Ký</button>';
                                    echo '<button onclick="dangnhap()">Đăng Nhập</button>';
                                }   
                            ?>      
                        </div>
                    </li>
                </ul> 
            </div>
        </div>
                <div class="nav__search">
                    <div class="search">
                        <form action="" method="GET">
                            <input type="text" class="input-search" id="" name="search" required placeholder="Tìm kiếm truyện...">
                            <button type="submit" name="submit"><i class="uil uil-search"></i></button>
                        </form>
                    </div>
                </div>