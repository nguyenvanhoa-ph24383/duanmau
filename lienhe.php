
<?php include"headernguoidung.php";

include "function_lienhe.php";
$lienhe = new lienhe();
if(isset($_POST['ok'])){
   $lienhe->hoten=isset($_POST['hoten']) ? $_POST['hoten'] : '';
   $lienhe->sdt=isset($_POST['sdt']) ? $_POST['sdt'] : '';
   $lienhe->email=isset($_POST['email']) ? $_POST['email'] : '';
   $lienhe->noidung=isset($_POST['noidung']) ? $_POST['noidung'] : '';
  
   $lienhe->insert();

   
}
?>
<style>

    .contact {
        height: unset;
    }

    .contact__form:hover {
        box-shadow:0 0 10px 0 rgba(0,0,0,0.15);
    }

.contact__form-gr-input{
    border:1px solid black !important;
}
</style>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<div class="container">
        <!-- =====  BREADCRUMB END===== -->
        <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
          <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
            <div class="nav-responsive">
              <div class="heading-part">
                <h2 class="main_title">Danh mục sản phẩm</h2>
              </div>
              <ul class="nav  main-navigation collapse in">
                <li><a href="#">Áo quây phồng</a></li>
                <li><a href="#">Áo sơ mi nữ</a></li>
                <li><a href="#">Áo bra vest</a></li>
                <li><a href="#">Áo voan mềm tơ</a></li>
                <li><a href="#">Áo cổ tròn dáng rộng</a></li>
                <li><a href="#">Áo baby tee</a></li>
                <li><a href="#">Áo thun tay dài</a></li>
                <li><a href="#">Áo phông tay ngắn</a></li>
                <li><a href="#">Áo bó body nữ</a></li>
              
              </ul>
            </div>
          </div>
          <div class="left_banner left-sidebar-widget mt_30 mb_40"> <a href="#"></a> </div>
        </div>
        <div class="col-sm-8 col-lg-9 mtb_20">
          <!-- contact  -->
          <div class="row">
            <div class="col-md-4 col-xs-12 contact">
              <div class="location mb_50">
                <h5 class="capitalize mb_20"><strong>Our Location</strong></h5>
                <div class="address">Office address
                  <br> 124,Lorem Ipsum has been
                  <br> text ever since the 1500</div>
                <div class="call mt_10"><i class="fa fa-phone" aria-hidden="true"></i>+91-9987-654-321</div>
              </div>
              <div class="Career mb_50">
                <h5 class="capitalize mb_20"><strong>Careers</strong></h5>
                <div class="address">dummy text ever since the 1500s, simply dummy text of the typesetting industry. </div>
                <div class="email mt_10"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:careers@yourdomain.com" target="_top">careers@yourdomain.com</a></div>
              </div>
              <div class="Hello mb_50">
                <h5 class="capitalize mb_20"><strong>Say Hello</strong></h5>
                <div class="address">simply dummy text of the printing and typesetting industry.</div>
                <div class="email mt_10"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@yourdomailname.com" target="_top">info@yourdomailname.com</a></div>
              </div>
            </div>
            <div class="col-md-8 col-xs-12 contact-form mb_50">
              <!-- Contact FORM -->
              <div id="contact_form">
              
                <form id="contact_body" method="post" action="">
                  <!--                                <label class="full-with-form" ><span>Name</span></label>
-->
                  <input class="full-with-form " type="text" name="hoten" placeholder="Họ và tên" data-required="true" />
                  <!--                <label class="full-with-form" ><span>Email Address</span></label>
-->
                  <input class="full-with-form  mt_30" type="email" name="email" placeholder="Email " data-required="true" />
                  <!--                <label class="full-with-form" ><span>Phone Number</span></label>
-->
                  <input class="full-with-form  mt_30" type="text" name="sdt" placeholder="Số điện thoại" maxlength="15" data-required="true" />
                  <!--                <label class="full-with-form" ><span>Subject</span></label>
-->

                  <!--                                <label class="full-with-form" ><span>Message</span></label>
-->
                  <textarea class="full-with-form  mt_30" name="noidung" placeholder="Nội dung" data-required="true"></textarea>
                  <button class="btn mt_30" type="submit" name="ok">Gửi Ngay</button>
                </form>
                <div id="contact_results"></div>
              </div>
              <!-- END Contact FORM -->
            </div>
          </div>
          <!-- map  -->
        
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Single Blog  -->
  <!-- End Blog   -->
  <!-- =====  CONTAINER END  ===== -->
  <!-- =====  FOOTER START  ===== -->
  <div class="footer pt_60">
    <div class="container">
      <div class="row">
        <div class="footer-top pb_60 mb_30">
          <div class="col-xs-12 col-sm-6">
            <div class="footer-logo"> <a href="index.php"> <img src="ass/images/n.png" alt="OYEENok"> </a> </div>
            <div class="footer-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicagna.</div>
            <div class="footer-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicagna.</div>
          </div>
          <!-- =====  testimonial  ===== -->
          <div class="col-xs-12 col-sm-6">
            <div class="Testimonial">
              <div class="client owl-carousel">
                <div class="item client-detail">
                  <div class="client-avatar"> <img alt="" src="images/user1.jpg"> </div>
                  <div class="client-title"><strong>joseph Lui</strong></div>
                  <div class="client-designation mb_10"> - php Developer</div>
                  <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                </div>
                <div class="item client-detail">
                  <div class="client-avatar"> <img alt="" src="images/user2.jpg"> </div>
                  <div class="client-title"><strong>joseph Lui</strong></div>
                  <div class="client-designation mb_10"> - php Developer</div>
                  <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                </div>
                <div class="item client-detail">
                  <div class="client-avatar"> <img alt="" src="images/user3.jpg"> </div>
                  <div class="client-title"><strong>joseph Lui</strong></div>
                  <div class="client-designation mb_10"> - php Developer</div>
                  <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                </div>
              </div>
            </div>
          </div>
          <!-- =====  testimonial end ===== -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 footer-block">
          <h6 class="footer-title ptb_20">Information</h6>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Delivery Information</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-block">
          <h6 class="footer-title ptb_20">Services</h6>
          <ul>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Site Map</a></li>
            <li><a href="#">Wish List</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Order History</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-block">
          <h6 class="footer-title ptb_20">Extras</h6>
          <ul>
            <li><a href="#">Brands</a></li>
            <li><a href="#">Gift Certificates</a></li>
            <li><a href="#">Affiliates</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="#">Newsletter</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-block">
          <h6 class="footer-title ptb_20">Contacts</h6>
          <ul>
            <li>Warehouse & Offices, 12345 Street name, California USA</li>
            <li>(+123) 456 789
              <br> (+024) 666 888</li>
            <li>Contact@yourcompany.com</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom mt_60 ptb_20">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="social_icon">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="copyright-part text-center">Vũ Thị Bắc - vurio410@gmail.com</div>
          </div>
          <div class="col-sm-4">
            <div class="payment-icon text-right">
              <ul>
                <li><i class="fa fa-cc-paypal "></i></li>
                <li><i class="fa fa-cc-visa"></i></li>
                <li><i class="fa fa-cc-discover"></i></li>
                <li><i class="fa fa-cc-mastercard"></i></li>
                <li><i class="fa fa-cc-amex"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- =====  FOOTER END  ===== -->
  <a id="scrollup"></a>
  <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/custom.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT3mI0RI16q19Oxv93gSxN0cF0wfxWN6w">
  </script>
  <script src="js/map.js"></script>
  <script src="js/mail.js"></script>
</body>

</html>  