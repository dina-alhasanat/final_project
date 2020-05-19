<?php
 include("admin/includes/connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Modist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Online Fashion</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="">Shop</a>
                <a class="dropdown-item" href="">Single Product</a>
                <a class="dropdown-item" href="">Cart</a>
                <a class="dropdown-item" href="">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		
		<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">Modist - Time to shopping</h3>
        	<h3 class="vr">Since - 1985</h3>
          <div class="col-md-11 ftco-animate text-center">
            <h1>Le Stylist</h1>
            <h2><span>Wear Your Dress</span></h2>
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    
   <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate" style="padding-bottom: 20px;padding-right: 50px;">
            <h1 class="big">Category</h1>
            <h2>Our Category</h2>
          </div></br>
        </div>
        <div class="row d-flex">

          <?php 
          /*
          $query ="select * from category";
          $result =mysqli_query($conn,$query);
          while ($catset =mysqli_fetch_assoc($result)) { 
           echo" <div class='col-md-6 d-flex ftco-animate'>
                 <div class='blog-entry align-self-stretch'>
                 <a href='#' class='block-20' style='background-image: url(uploads/{$catset['cat_image']})'>
                 </a>
                 <div class='text mt-3'>
                 <h3 class='heading mt-3'><a href='shop.php'>{$catset['cat_name']}</a></h3>
                 </div> </div> </div>";}  */
          ?>

          <?php 
          /*
              $query ="select * from category";
          $result =mysqli_query($conn,$query);
          while ($catset =mysqli_fetch_assoc($result)) { 
          echo" <div class='col-md-6 d-flex ftco-animate'>";
          echo "<div class='blog-entry align-self-stretch'>";
          echo "<img src='{uploads/$catset['cat_image']}' alt='Image' class='block-20'>";
           echo "<div class='text mt-3'>";
           echo" <h3 class='heading mt-3'><a href='shop.php'>{$catset['cat_name']}</a></h3>";
           echo "</div> </div> </div>";}  
             */
           
           ?>

          <?php 
          $query ="select * from category";
          $result =mysqli_query($conn,$query);
          while ($catset =mysqli_fetch_assoc($result)) { 
            echo" <div class='col-md-6 d-flex ftco-animate'>
                  <div class='blog-entry align-self-stretch'>

                  <img src='admin/uploads/{$catset['cat_image']}' width='450' height='450' alt='Image' class='block-20'>
                 <div class='text mt-3'>
                 <h3 class='heading mt-3' style='text-align: center;'><a href='shop.php ? id={$catset['cat_id']}'>{$catset['cat_name']}</a></h3>
                 </div> </div> </div>";}  
          ?>
          
          </div>
        </div>
      </div>
    </section>

    <div class="goto-here"></div>
    
    <section class="ftco-section ftco-product">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Product</h1>
            <h2 class="mb-4">coming Soon Product</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="product-slider owl-carousel ftco-animate">
             <?php
              $query  = 'select * from secprod where cat_id=1 ';
              $result = mysqli_query($conn , $query);
              while ($secprod = mysqli_fetch_assoc($result)) {
             echo" <div class='item'>
                    <div class='product'>
                  <a href='#' class='img-prod'><img class='img-fluid' src='admin/uploads/{$secprod['secprod_image']}' alt='Colorlib Template'></a>
                  <div class='text pt-3 px-3'>
                    <h3><a href='#'>{$secprod['secprod_name']}</a></h3>
                    <div class='d-flex'>
                      <div class='pricing'>
                        <p class='price'><span>{$secprod['secprod_price']}</span></p>
                      </div>
                      <div class='rating'>
                        <p class='text-right'>
                          <span class='ion-ios-star-outline'></span>
                          <span class='ion-ios-star-outline'></span>
                          <span class='ion-ios-star-outline'></span>
                          <span class='ion-ios-star-outline'></span>
                          <span class='ion-ios-star-outline'></span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>";}

              ?>
           
            </div>
          </div>

        
        </div>
      </div>
    </section>

     <div class="goto-here"></div>
    
    <section class="ftco-section ftco-product">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Product</h1>
            <h2 class="mb-4">feature Product</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="product-slider owl-carousel ftco-animate">
             <?php
              $query  = 'select * from secprod where cat_id=2 ';
              $result = mysqli_query($conn , $query);
              while ($secprod = mysqli_fetch_assoc($result)) {
             echo" <div class='item'>
                    <div class='product'>
                  <a href='#' class='img-prod'><img class='img-fluid' src='admin/uploads/{$secprod['secprod_image']}' alt='Colorlib Template'></a>
                  <div class='text pt-3 px-3'>
                    <h3><a href='#'>{$secprod['secprod_name']}</a></h3>
                    <div class='d-flex'>
                      <div class='pricing'>
                        <p class='price'><span>{$secprod['secprod_price']}</span></p>
                      </div>
                      <div class='rating'>
                        <p class='text-right'>
                          <span class='ion-ios-star-outline'></span>
                          <span class='ion-ios-star-outline'></span>
                          <span class='ion-ios-star-outline'></span>
                          <span class='ion-ios-star-outline'></span>
                          <span class='ion-ios-star-outline'></span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>";}

              ?>
           
            </div>
          </div>

        
        </div>
      </div>
    </section>

    
    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Modist</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate" ><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>