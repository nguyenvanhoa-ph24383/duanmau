<?php include "headernguoidung.php";?>

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
    
    if(isset($_GET['timkiem']) ){
        $key=$_GET['timkiem'];
        $sql = "SELECT * FROM `sanpham1` where tensp like  '%$key%' ";
        

    }
    else
    { $sql = "SELECT * FROM `sanpham1`  ";
    }
    $result = mysqli_query($conn, $sql);
    ?>	



<!-- =====  PRODUCT TAB  ===== -->
<div class="container">
     <!-- =====  SUB BANNER END  ===== -->
     <div class="row ">
        <div class="col-sm-12 mtb_10">
          <!-- =====  PRODUCT TAB  ===== -->
          <div id="product-tab" class="mt_50">
            <div class="heading-part mb_10 ">
              <h2 class="main_title">Trang Sức Tìm Kiếm</h2>
            </div>
           
            <div class="tab-content clearfix box">
              <div class="tab-pane active" id="nArrivals">
              
                <div class="nArrivals owl-carousel"> <?php       $limit = 8; 
                            $count = 0; 
                            while ($row= mysqli_fetch_assoc($result)) { 
                                if ($count >= $limit) {
                                    break; 
                                }    
                        ?> 
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> 
                        <a href="chitiet.php?masp=<?php echo $row["masp"] ?>"  >
                                        <img data-name="product_image" alt="iPod Classic" title="iPod Classic"  class="img-responsive" src="upload/<?php echo $row["img1"] ?>" alt="" class="card-image"  >
                          
                            <img src="upload/<?php echo $row["img2"] ?>" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <form action="cart.php" method="post" >
                                           
                                           <input type="submit"  name="addcart" class="add-to-cart">
                                           <input type="hidden" name="soluong" value="1">
                                           <input type="hidden" name="tensp" value="<?php echo $row["tensp"] ?>">
                                           <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"] ?> 000.000 VNĐ">
                                           <input type="hidden" name="img1" value="<?php echo $row["img1"] ?>">   
                                   </form>
                          </div>
                        </div>
                        <div class="caption product-detail text-center">
                          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                          <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem"><?php echo $row["tensp"] ?></a></h6>
                          <span class="price"><span class="amount"><span class="currencySymbol"></span><?php echo $row["dongiamoi"] ?> 000.000 VNĐ</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>  
                  <?php 
                            $count++;    
                            }     ?>  
               
                </div> 
              </div>
            </div>
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
  <?php include "footernguoidung.php";?>