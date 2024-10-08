
<?php
   include "thuvien.php";

//Lấy thông tin bản ghi cần sửa
$masp = isset($_GET['masp']) ? $_GET['masp'] : '';
$sql = "SELECT * FROM `sanpham1`WHERE masp='$masp' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
 	

<style>
.product-name{
    text-transform: uppercase;
  color: green !important;
  font-weight: bold;
}

</style>

      <div class="container">
   
<div class="col-sm-8 col-lg-9 mtb_20">
          <div class="row mt_10 ">
            <div class="col-md-6">
              <div><a class="thumbnails">  <img src="upload/<?php echo $row["img1"] ?>" data-name="product_image"  alt="" /></a></div>
              <div id="product-thumbnail" class="owl-carousel">
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="upload/<?php echo $row["img1"] ?>" data-fancybox="group1">
                     <img src="upload/<?php echo $row["img1"] ?>" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="upload/<?php echo $row["img2"] ?>" data-fancybox="group1"> 
                    <img src="upload/<?php echo $row["img2"] ?>" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="upload/<?php echo $row["img4"] ?>" data-fancybox="group1"> 
                    <img src="upload/<?php echo $row["img4"] ?>" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="upload/<?php echo $row["img3"] ?>" data-fancybox="group1">
                     <img src="upload/<?php echo $row["img3"] ?>" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="upload/<?php echo $row["img1"] ?>" data-fancybox="group1">
                     <img src="upload/<?php echo $row["img1"] ?>" alt="" /></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 prodetail caption product-thumb">
              <h4 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem"><?php echo $row["tensp"] ?></a></h4>
              <div class="rating">
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
              </div>
              <span class="price mb_20"><span class="amount"><span class="currencySymbol">Đơn giá :</span><?php echo $row["dongiamoi"] ?> 000 VNĐ</span>
              </span>
              <hr>
              <ul class="list-unstyled product_info mtb_20">
              <li>
                  <label>Mã sả phẩm:</label>
                  <span> <a href="#"><?php echo $row["masp"] ?></a></span></li>
                <li>
                  <label>Nơi sản xuất:</label>
                  <span> <a href="#"><?php echo $row["xuatxu"] ?></a></span></li>
                <li>
                  <label>Kích thước:</label>
                  <span> <?php echo $row["kichthuoc"] ?></span></li>
                <li>
                  <label>Ghi chú:</label>
                  <span> <?php echo $row["ghichu"] ?></span></li>
                  <li>
                  <label>Người đăng bán :</label>
                  <span> <?php echo $row["nguoidang"] ?></span></li>
              </ul>
              <hr>
              <p class="product-desc mtb_30"></p>
              <div id="product">
             
               
        
                <form action="cart.php" method="post" >
                   <div class="qty mt_30 form-group2">
                  <label>Số lượng :</label>
                  <p class="detail-items__quantity-text"></p>
                
                  <input name="soluong" min="1" value="1" MAX="100" type="number">
                </div>
                                        
                                            <input type="hidden" name="tensp" value="<?php echo $row["tensp"] ?>">
                                            <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"] ?> 000 VNĐ">
                                            <input type="hidden" name="img1" value="<?php echo $row["img1"] ?>">   
                                              <input type="submit" value="Thêm vào giỏ hàng" name="addcart" class="btn mt_30">
                                        
                                    
                                      </form>
                
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div id="exTab5" class="mtb_30">
                <ul class="nav nav-tabs">
                  <li class="active"> <a href="#1c" data-toggle="tab">Mô tả</a> </li>
                  
                </ul>
                <div class="tab-content ">
                  <div class="tab-pane active" id="1c">
<p>                     .                                                                                                                                                                          </p>
                    <p>Mô tả: <?php echo $row["mota"] ?></p>
                    <p>Cách dùng: <?php echo $row["cachchamsoc"] ?></p>
                    <p> Điểm nổi bật: <?php echo $row["diemnoibat"] ?></p>
                  </div>
</div>
</div>
</div>
  <!-- =====  PRODUCT TAB  END ===== -->
  <a id="scrollup"></a>
  <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.firstVisitPopup.js"></script>
  <script src="js/custom.js"></script>
<div id="brand_carouse" class="ptb_50 text-center">
        <div class="type-01">
          <div class="row">
            <div class="col-sm-12">
              <div class="brand owl-carousel ptb_20">
                <div class="item text-center"> <a href="#"><img src="ass/images/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="ass/images/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="ass/images/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="ass/images/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="ass/images/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="ass/images/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="ass/images/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="ass/images/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="ass/images/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>
</div>