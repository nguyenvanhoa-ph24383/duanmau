<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "duanmau";

    //B1: Create connetion
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    
    if (!$conn) {
        die("connection failer" . mysqli_connect_error());
    }
    //B2:
        $sql = "SELECT * 
        FROM sanpham1 
        Order by rand()
        limit 4";
    //Bước 3
    $result = mysqli_query($conn, $sql);
    ?>
    <style>
h3{
    text-transform: uppercase;
 }
 p{
    display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
 }
    </style>
          <div class="container">
 <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
          <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
            <div class="nav-responsive">
              <div class="heading-part">
                <h2 class="main_title">danh mục sản phẩm</h2>
              </div>
              <ul class="nav  main-navigation collapse in">
              <li><a href="#">Nhẫn Kim Cương</a></li>
                <li><a href="#">Nhẫn Mã Bạc</a></li>
                <li><a href="#">Nhẫn Mạ Vàng</a></li>
                <li><a href="#">Nhẫn Hột Xoàn</a></li>
                <li><a href="#">Nhẫn Pha Lê</a></li>
                <li><a href="#">Nhẫn Vàng Trắng</a></li>
                <li><a href="#">Nhẫn Cưới</a></li>
                <li><a href="#">Nhẫn Bạc</a></li>
                <li><a href="#">Nhẫn Cầu Hôn</a></li>
              </ul>
            </div>
          </div>
          <div class="left_banner left-sidebar-widget mt_30 mb_40"> <a href="#"></a> </div>
          <div class="blog-category left-sidebar-widget mb_50">
            <div class="heading-part mb_20 ">
              <h2 class="main_title">Danh Mục Tin Tức</h2>
            </div>
            <ul>
              <li><a href="#">Nhãn Hàng Mơi Ra Mắt</a></li>
              <li><a href="#">Nhãn Hàng Được săn Đón Nhất</a></li>
              <li><a href="#">Nhãn Hàng Có Lượt Mua Nhiều Nhất</a></li>
              <li><a href="#">KOL Hot Nhất Tuần Qua</a></li>
              <li><a href="#">Sản Phẩm Có oanh Thu Nhiều Nhất</a></li>
              <li><a href="#">Sran Phẩm Được Đánh Giá Cao </a></li>
              <li><a href="#">Sản Phẩm Tốt Cho Sức Khỏe</a></li>
              <li><a href="#">KOL  Hot Hit</a></li>
              <li><a href="#">Học Bán Hàng Cùng KOL</a></li>
             
            </ul>
          </div>
          <div class="left-blog left-sidebar-widget mb_50">
            <div class="heading-part mb_20 ">
              <h2 class="main_title">Bài Đăng Gần Đây</h2>
            </div>
            <div id="left-blog">
              <div class="row ">
                <div class="blog-item mb_20">
                  <div class="post-format col-xs-4">
                    <div class="thumb post-img"><a href="#"> <img src="upload/d1.jfif"  alt="OYEENok"></a></div>
                  </div>
                  <div class="post-info col-xs-8 ">
                    <h5> <a href="">Dây Chuyền Kim Cương</a> </h5>
                    <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>23 May 2016 </div>
                  </div>
                </div>
                <div class="blog-item mb_20">
                  <div class="post-format col-xs-4">
                  <div class="thumb post-img"><a href="#"> <img src="upload/d2.jfif"  alt="OYEENok"></a></div>
                  </div>
                  <div class="post-info col-xs-8 ">
                    <h5> <a href="">Dây Chuyền Vàng Trắng</a> </h5>
                    <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                  </div>
                </div>
                <div class="blog-item mb_20">
                  <div class="post-format col-xs-4">
                  <div class="thumb post-img"><a href="#"> <img src="upload/f4.jfif"  alt="OYEENok"></a></div>
                  </div>
                  <div class="post-info col-xs-8 ">
                    <h5> <a href="">Dây Chuyền Bạc</a> </h5>
                    <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>01 May 2018 </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-8 col-lg-9 mtb_20">
          <div class="row">
            <div class="three-col-blog text-left">
            <?php while ($row= mysqli_fetch_assoc($result)) { ?>
              <div class="blog-item col-md-6 mb_30">
                <div class="post-format">
                  <div class="thumb post-img">
                  <a href="chitiet.php?masp=<?php echo $row["masp"] ?>"  ><img src="upload/<?php echo $row["img1"] ?>"  alt="OYEENok"></a></div>
                  <div class="post-type"><i class="fa fa-music" aria-hidden="true"></i></div>
                </div>
                <div class="post-info mtb_20 ">
                  <h3 class="mb_10"> <a href=""><?php echo $row["tensp"] ?></a> </h3>
                  <p><?php echo $row["mota"] ?></p>
                  <div class="details mtb_20">
                    <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row["ngaydang"] ?> </div>
                    <div class="more pull-right"> <a href="">Đọc Thêm...<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                  </div>
                </div>
              </div>
              <?php } ?>  
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- =====  CONTAINER END  ===== -->
  
                    

   