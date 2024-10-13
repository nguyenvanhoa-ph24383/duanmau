
<?php 	  session_start();
//   if(isset($_SESSION)){

//   }
 
 
 ?>
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
    $sql_nhom = "SELECT * FROM `sanpham_nhom` ";
   ;
    //Bước 3
    $result_nhom = mysqli_query($conn, $sql_nhom);
   
    $addToCartClicked = isset($_POST['addcart']);

    if ($addToCartClicked && !isset($_SESSION['user'])) {
        // Người dùng chưa đăng nhập và đã nhấn nút "Thêm vào giỏ hàng"
        // Chuyển hướng đến trang login.php
        header("Location: login.php");
        exit();
    }

   
    ?>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>OYEENok E-commerce Bootstrap Template</title>
  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <!-- =====  CSS  ===== -->
  <link rel="stylesheet" type="text/css" href="ass/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="ass/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="ass/css/style.css">
  <link rel="stylesheet" type="text/css" href="ass/css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="ass/css/owl.carousel.css">
  <link rel="shortcut icon" href="ass/images/favicon.png">
  <link rel="apple-touch-icon" href="ass/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="ass/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="ass/images/apple-touch-icon-114x114.png">
</head>

<body>

    <header id="header">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="header-top-left">
                <div class="contact"><a href="#">Call now !</a> <span class="hidden-xs hidden-sm hidden-md">+91 987-654-321</span></div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-8">
            <?php if(isset($_SESSION['user'])){ ?>
              <ul class="header-top-right text-right">
                <li class="account"><a href="#"><?php echo $_SESSION['user']; ?> </a></li>
                <li class="account"><a href="logout.php">Đăng Xuất</a></li>
                <li class="account"><a href="xemdonhang_dadat.php">Đơn Hàng</a></li>
                <li class="account"><a href="cart.php">Giỏ Hàng</a></li>
                <!-- <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Currency <span class="caret"></span> </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
                    <li><a href="#">€ Euro</a></li>
                    <li><a href="#">£ Pound Sterling</a></li>
                    <li><a href="#">$ US Dollar</a></li>
                  </ul>
                </li> -->
                <?php } else { ?>
                    <ul class="header-top-right text-right">
                    <li class="account"><a href="login.php">Đăng Nhập </a></li>
                    <li class="account"><a href="dangki.php">Đăng  Kí</a></li>

                    <?php } ?> 
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
            <form action="timkiemsp.php"  method="GET">
              <div class="main-search mt_40">
                <input id="search-input" name="timkiem" value="" placeholder="Search" class="form-control input-lg" autocomplete="off" type="text"
                  value="<?php if(isset($_GET['timkiem'])) 
                        {
                            echo $_GET['timkiem'];} ?> " >  
                <span class="input-group-btn">
                
              <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
              </span> </div>
                        </form>
            </div>
            <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="index.php"> <img alt="OYEENok" src="ass/images/b.png"> </a> </div>
           <div class="col-xs-6 col-sm-4 shopcart"></a>
              <div id="cart" class="btn-group btn-block mtb_40">
                <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true">
                <?php if(isset($_SESSION['user'])){ ?>
                     <span id="shippingcart">Shopping cart</span><span id="cart-total">items (<?php echo isset($_SESSION['giohang']) ? count($_SESSION['giohang']) : 0; ?>)</span> </button>
              </div>
              <?php } else { ?>

            <span id="shippingcart">Shopping cart</span><span id="cart-total"> items (0)</span> </button>
                <?php } ?> 
              </div>
            </div>
          </div>
          <nav class="navbar">
            <p>Menu</p>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
            <div class="collapse navbar-collapse js-navbar-collapse">
              <ul id="menu" class="nav navbar-nav">
                <li> <a href="index.php">TRANG CHỦ</a></li>
                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">DANH MỤC SẢN PHẨM </a>
                  <ul class="dropdown-menu">
                  <?php while ($row_nhom = mysqli_fetch_assoc($result_nhom)) { ?>
            
                    <li >     <a class="menu-link" href="cat.php?nhom_id=<?php echo $row_nhom["id"]?>"><?php echo  $row_nhom["tennhom"] ?></a></li>
                    <?php } ?></li>
                    
                  </ul>
                </li>
                <li> <a href="tintuc.php">TIN TỨC</a></li>
                <li> <a href="lienhe.php">LIÊN HỆ</a></li>
               
               
                
              </ul>
            </div>
            <!-- /.nav-collapse -->
          </nav>
        </div>
      </div>
    </header>
    <a id="scrollup"></a>
  <script src="ass/js/jQuery_v3.1.1.min.js"></script>
  <script src="ass/js/owl.carousel.min.js"></script>
  <script src="ass/js/bootstrap.min.js"></script>
  <script src="ass/js/jquery.magnific-popup.js"></script>
  <script src="ass/js/jquery.firstVisitPopup.js"></script>
  <script src="ass/js/custom.js"></script>