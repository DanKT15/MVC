<?php include_once(ROOT_VIEWSUSER.'header.php'); ?>

    <div id="wrapper"> <!-- background -->

        <div class="title__page">
            <p>THÔNG TIN TRUYỆN</p>
        </div>

        <div class="container"> <!-- thẻ bao bọc hết nội dung -->

            <div class="section__left"> <!-- phần giới thiệu truyện và chương -->

                <div class="section__left-content-1"> <!-- phần ảnh truyện, tên tác giả, thể loại, nguồn truyện, trạng thái -->

                    <?php
                        for($i = 0; $i < count($exshow); $i++){
                      
                            $nametruyen = $exshow[$i]['TenTruyen'];
                            $gioithieu = $exshow[$i]['GTTruyen'];

                            echo '<div class="card-img">  <!-- thẻ bọc ảnh truyện -->

                                    <img src="'.$exshow[$i]['ImgTruyen'].'" alt="truyen">
                                    
                                </div>

                                <div class="card-info"> <!-- phần tên tác giả, thể loại, nguồn truyện, trạng thái -->

                                    <p>Tác giả: <span><a href="index.php?c=user&a=tacgia&e=chitiet&id='.$exshow[$i]['TenTG'].'">'.$exshow[$i]['TenTG'].'</a></span> </p>
                                    <p>Thể loại: <span><a href="index.php?c=user&a=theloai&e=chitiet&id='.$exshow[$i]['TenTL'].'">'.$exshow[$i]['TenTL'].'</a></span> </p>
                                    <p>Nhóm Dịch: <span><a href="index.php?c=user&a=nhomdich&e=chitiet&id='.$exshow[$i]['TenNhom'].'">'.$exshow[$i]['TenNhom'].'</a></span> </p>
                                    <p>Trạng thái: <span>Full</span> </p>

                                </div>';

                        } 
                    ?>

                </div>

                <div class="section__left-content-2"> <!-- phần giới thiệu truyện -->

                    <div class="heading">

                        <?php
                            echo '<p>'.$nametruyen.'</p>';
                        ?>

                    </div>

                    <div class="rate-lists-icon">   <!-- phần icon sao đánh giá -->
                        <ul class="list-items">
                            <div><li><i class="uil uil-star"></i></li></div>
                            <div><li><i class="uil uil-star"></i></li></div>
                            <div><li><i class="uil uil-star"></i></li></div>
                            <div><li><i class="uil uil-star"></i></li></div>
                            <div><li><i class="uil uil-star"></i></li></div>
                            <div><li><i class="uil uil-star"></i></li></div>
                            <div><li><i class="uil uil-star"></i></li></div>
                            <div><li><i class="uil uil-star"></i></li></div>
                            <div><li><i class="uil uil-star"></i></li></div>
                            <div><li><i class="uil uil-star"></i></li></div>
                        </ul>
                    </div>

                    <div class="rate"> 
                        <p></p>
                    </div>

                    <div class="story-desc"> <!-- nội dung truyện -->

                        <?php
                            echo '<p>'.$gioithieu.'</p>'; 
                        ?>

                    </div>
                    <div class="menu-submit">
                    <div class="from-follow">

                        <button type="submit"><i class="uil uil-heart"></i><a href="index.php?c=user&a=truyen&e=chitiet&id=<?php echo $_GET['id']; ?>&add">Theo dõi</a></button>

                    </div>
                    <div class="menu-submit-item">
                    <div class="latest-reading">
                        
                    </div>
                    <div class="latest-reading">
                        
                    </div>
                    <div class="continue-reading">
                        
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="section__right"> <!-- phần các truyện khác của tác giả và các truyện hot khác -->

                <div class="section__right-content-1"> <!-- phần các truyện khác của tác giả -->

                    <p>TRUYỆN CÙNG TÁC GIẢ</p>

                    <div class="link-others-story"> <!-- link kết nối truyện khác của tác giả -->
                        <ul class="link-others-story-list-item">
                            <li class="list-item">
                                <i class="uil uil-angle-right-b"></i>


                                <a title="Sau Khi Ly Hôn Chồng Cũ Luôn Muốn Theo Đuổi Tôi" href="#">Sau Khi Ly Hôn Chồng Cũ ...</a> <!-- link truyện nữa bà tự thêm -->


                            </li>
        
                            <li class="list-item">
                                <i class="uil uil-angle-right-b"></i>
                                <a  title="Vợ Cũ Mang Thai Anh Yêu Em" href="#">Vợ Cũ Mang Thai Anh ...</a> <!-- link truyện nữa bà tự thêm -->
                            </li>
    
                            <li class="list-item">
                                <i class="uil uil-angle-right-b"></i>
                                <a title="Sự Hấp Dẫn Của Tổng Tài" href="#">Sự Hấp Dẫn Của ...</a> <!-- link truyện nữa bà tự thêm -->
                            </li>
                        </ul>
                    </div>

                    <div class="others-hot-story"> <!-- các truyện hot khác -->
                        <p>TRUYỆN ĐANG HOT</p>

                        <div class="others-hot-story-btn"> <!-- chọn theo ngày, tháng, all -->
                            <div>
                                <a class="active" href="#">NGÀY</a> <!-- link theo ngày nữa bà tự thêm -->
                            </div>
                            <div>
                                <a href="#">THÁNG</a>   <!-- link theo tháng nữa bà tự thêm -->
                            </div>
                            <div>
                                <a href="#">ALL TIME</a>    <!-- link all nữa bà tự thêm -->
                            </div>
                        </div>

                        <div class="others-hot-story-link"> <!-- phần link các truyện hot khác -->
                            <div class="card-number bg-red">1</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a class="heading-1" href="#">Thần Đạo Đan Tôn</a>  <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Tiên Hiệp,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Huyền Huyễn</a>   <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>

                        <div class="others-hot-story-link">
                            <div class="card-number bg-green">2</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a class="heading-1" href="#">Mê Vợ Không Lối Về</a>    <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Ngôn tình,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Ngược,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Sủng</a>  <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>

                        <div class="others-hot-story-link">
                            <div class="card-number bg-blue">3</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a class="heading-1" href="#">Thế Giới Hoàn Mỹ</a>  <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Tiên Hiệp,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Kiếm Hiệp,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Huyền Huyễn</a>   <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>

                        <div class="others-hot-story-link">
                            <div class="card-number">4</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a class="heading-1" href="#">Linh Vũ Thiên Hạ</a>  <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Tiên Hiệp,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Dị Giới,</a>      <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Huyền Huyễn</a>   <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>

                        <div class="others-hot-story-link">
                            <div class="card-number">5</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a class="heading-1" href="#">Đấu Phá Thương Khung</a>  <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Tiên Hiệp,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Dị Giới,</a>  <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Huyền Huyễn</a>   <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>

                        <div class="others-hot-story-link">
                            <div class="card-number">6</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a title="Cô Vợ Ngọt Ngào Có Chút Bất Lương" class="heading-1" href="#">Cô Vợ Ngọt Ngào Có Chút ...</a> <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Ngôn Tình,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Trọng Sinh,</a>   <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Sủng</a>  <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>

                        <div class="others-hot-story-link">
                            <div class="card-number">7</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a class="heading-1" href="#">Phàm Nhân Tu Tiên</a> <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Tiên Hiện,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Kiếm Hiệp</a>     <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>

                        <div class="others-hot-story-link">
                            <div class="card-number">8</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a class="heading-1" href="#">Nhất Niệm Vĩnh Hằng</a>   <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Tiên Hiệp</a>     <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Huyền Huyễn</a>   <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>

                        <div class="others-hot-story-link">
                            <div class="card-number">9</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a class="heading-1" href="#">Rể Quý Trời Cho</a>   <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Ngôn Tình,</a>    <!-- link thể loại nữa bà tự thêm -->
                                    <a class="heading-2" href="#">Đô Thị</a>        <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>

                        <div class="others-hot-story-link">
                            <div class="card-number">10</div>

                            <div class="title-others-hot-story">
                                <div class="heading-1-title">
                                    <a class="heading-1" href="#">Đế Bá</a> <!-- link truyện nữa bà tự thêm -->
                                </div>
                                <div class="heading-2-title">
                                    <a class="heading-2" href="#">Huyền Huyễn</a>   <!-- link thể loại nữa bà tự thêm -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chapter-lists">

                <p>DANH SÁCH CHƯƠNG</p>

                <div class="chapter__list-items">
                    <div class="chapter__1-25">
                        <ul>

                            <?php  
            
                                if (isset($showchapter) && !empty($showchapter)) 
                                {
                                    for($i = 0; $i < count($showchapter); $i++){
                                    
                                        echo '<li><a href="index.php?c=user&a=truyen&e=exchapter&id='.$showchapter[$i]['MaChapter'].'">'.$showchapter[$i]['TenChapter'].'</a></li>';

                                    }
                                }
                                else {
                            
                                    echo '<li>Đang cập nhật!!!</li>';

                                }
            
                            ?>
                            
                        </ul>
                    </div>
    
                </div>

                <div class="comment">
                    <p>BÌNH LUẬN TRUYỆN</p>
                    <div class="ma">

                    <?php
                        if (isset($_SESSION['username']) || isset($_SERVER['admin'])) 
                        {
                            echo '<form method="POST" id="frm-comment" data-blog-id="{{id}}" onsubmit="return addComment()">
                                        <div class="row">
                                            <div class="form-comment">
                                                <textarea class="form-control form-control-sm" name="noidung" id="comment" placeholder="Viết bình luận..." rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="form-name">';
                                            
                                            if (isset($_SESSION['username'])) {
                                                echo '<input type="text" class="form-control form-control-sm " name="name" id="name" placeholder="Họ tên" value="'.$_SESSION['username'].'" required>';
                                            }

                                            if (isset($_SESSION['admin'])) {
                                                echo '<input type="text" class="form-control form-control-sm " name="name" id="name" placeholder="Họ tên" value="'.$_SESSION['admin'].'" required>';
                                            }
                                                

                                        echo    '</div>
                                            <div class="form-email"></div>
                                            <div class="from-submit">
                                            <input type="submit" name="submit" value="đăng bình luận" />
                                            </div>
                                        </div>
                                    </form>'; 
                        }
                    ?>

                    <!-- <form method="POST" id="frm-comment" data-blog-id="{{id}}" onsubmit="return addComment()">
                        <div class="row">
                            <div class="form-comment">
                                <textarea class="form-control form-control-sm" name="noidung" id="comment" placeholder="Viết bình luận..." rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-name">
                                <input type="text" class="form-control form-control-sm " name="name" id="name" placeholder="Họ tên" value="<?php echo $_SESSION['admin']; ?>" required>
                            </div>
                            <div class="form-email"></div>
                            <div class="from-submit">
                                <button type="submit">Gửi</button>
                            </div>
                        </div>
                    </form> -->

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

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once(ROOT_VIEWSUSER.'footer.php'); ?>