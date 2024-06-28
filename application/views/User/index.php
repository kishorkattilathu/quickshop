<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickShop</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url('Assets/User/css/style-starter.css')?>">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->

</head>
<body>
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider-main">
	<div class="top-header-content">
		<header class="tophny-header">
			<div class="container-fluid">
				<div class="top-right-strip row">
					<!--/left-->
					<div class="top-hny-left-content col-lg-6 pl-lg-0">
						<h6>Upto 30% off on All styles , <a href="" target="_blank"> Click here for <span
									class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span
									class="hignlaite">More details</span></a></h6>
					</div>
					<!--//left-->
					<!--/right-->
					<ul class="top-hnt-right-content col-lg-5">
						<li class="button-log usernhy">
							<!-- <a class="btn-open" href="#"> -->
								
								<!-- <button class="top_transmitv_cart" style="padding-left:-100px">
									Registeration
									
								</button> -->
							</a>
						</li>
						
						<ul class="top-hnt-right-content col-lg-4">
						
						<li class="button-log usernhy">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						

					</ul>

					</ul>
					
					<!--//right-->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login-bghny p-md-5 p-4 mx-auto mw-100">
								<!--/login-form-->
								<form action="<?php echo base_url("User_controller/login")?>" method="post">
									<div class="form-group">
										<p class="login-texthny mb-2">Email address</p>
										<input type="email" class="form-control" name="email" id="exampleInputEmail1"
											aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email
											with anyone else.</small>
									</div>
									<div class="form-group">
										<p class="login-texthny mb-2">Password</p>
										<input type="password" class="form-control" name="password" id="exampleInputPassword1"
											placeholder="" required="">
									</div>

									<div class="form-check mb-2">
										<div class="userhny-check">
											<!-- <label class="check-remember container">

												<input type="checkbox" class="form-check"> <span
													class="checkmark"></span>
												<p class="privacy-policy">Remember me</p>

											</label> -->

											<div class="clearfix"></div>
										</div>
									</div>
									<button type="submit" name="button" class="submit-login btn mb-4">Sign In</button>
												<a class="text-center login-texthny mb-2" href="<?=base_url('User_controller/user_register')?> "><h6 style="color: white">Register Here!</h6></a>


								</form>
								<!--//login-form-->
							</div>
							<!---->
						</div>
					</div>
				</div>
			</div>

			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="">
						Quick<span class="lohny">S</span>hop</a>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					<!--/search-right-->
					
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="<?=base_url()?>">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?=base_url('User_controller/about_user')?>">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?=base_url('Admin_controller/login')?>">Admin  Login</a>
							  </li>


							<li class="nav-item">
								<a class="nav-link" href="<?=base_url('User_controller/contact_user')?>">Contact</a>
							</li>
						</ul>

					</div>
				</div>
			</nav>
			<!--//nav-->
		</header>
		<div class="bannerhny-content">

			<!--/banner-slider-->
			<div class="content-baner-inf">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<!-- <a href="#" class="shop-button btn">
										Shop Now
									</a> -->

								</div>
							</div>
						</div>
						<div class="carousel-item item2">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<!-- <a href="#" class="shop-button btn">
										Shop Now
									</a> -->

								</div>
							</div>
						</div>
						<div class="carousel-item item3">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<!-- <a href="#" class="shop-button btn">
										Shop Now
									</a>
 -->
								</div>
							</div>
						</div>
						<div class="carousel-item item4">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<!-- <a href="#" class="shop-button btn">
										Shop Now
									</a> -->
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!--//banner-slider-->
			<!--//banner-slider-->
			<div class="right-banner">
				<div class="right-1">
					<h4>
						Men's
						Fashion
						<br>50% Off</h4>
				</div>
			</div>

		</div>

</section>
<!-- //w3l-banner-slider-main -->
<!-- <section class="w3l-grids-hny-2">
	
<!-- //content-6-section -->

<section class="w3l-content-w-photo-6">
	<!-- /specification-6-->
	  <div class="content-photo-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="align-photo-6-inf-cols row">
						
						<div class="photo-6-inf-right col-lg-6">
								<h3 class="hny-title text-left">All Branded Men's Suits are Flat <span>30% Discount</span></h3>
								<p>Visit our shop to see amazing creations from our designers.</p>
								<!-- <a href="#" class="read-more btn">
										Shop Now
								</a> -->
						</div>
						<div class="photo-6-inf-left col-lg-6">
								<img src="<?=base_url('Assets/User/images/1.jpg')?>" class="img-fluid" alt="">
						</div>
					</div>
				 </div>
			 </div>
	 </section>
   <!-- //specification-6-->
     
<section class="w3l-video-6">
	<!-- /video-6-->
	<div class="video-66-info">
		<div class="container-fluid">
			<div class="video-grids-info row">
				<div class="video-gd-right col-lg-8">
					<div class="video-inner text-center">
								<!--popup-->
									<a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
											<span class="fa fa-play" aria-hidden="true"></span>
									</a>
									<div id="small-dialog" class="mfp-hide">
										<div class="search-top notify-popup">
												<iframe src="https://player.vimeo.com/video/246139491" frameborder="0"
												allow="autoplay; fullscreen" allowfullscreen></iframe>
										</div>
									</div>
									<!--//popup-->
					      </div>
				  </div>
				<div class="video-gd-left col-lg-4 p-lg-5 p-4">
					<div class="p-xl-4 p-0 video-wrap">
						<h3 class="hny-title text-left">All Branded Women's Bags are Flat <span>30% Discount</span>
						</h3>
						<p>Visit our shop to see amazing creations from our designers.</p>
						<!-- <a href="#" class="read-more btn">
							Shop Now
						</a> -->
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- //video-6-->

<!-- //products-->
<section class="w3l-content-5">
	<!-- /content-6-section -->
	<div class="content-5-main">
		<div class="container">
			<div class="content-info-in row">
				<div class="content-gd col-md-6 offset-lg-3 text-center">
					<h3 class="hny-title two">
						Tons of Products & Options to
						<span>change</span></h3>
					<p>As our understanding of sustainability and social responsibility grows, so do we increasingly recognise that design needs to adapt and innovate to meet these challenges. Fashion is not exempt from...</p>
					<!-- <a href="#" class="read-more-btn2 btn">
						Shop Now
					</a> -->

				</div>

			</div>

		</div>
	</div>
</section>
<!-- //content-6-section -->
<section class="w3l-post-grids-6">
	<!-- /post-grids-->
	<div class="post-6-mian py-5">
		<div class="container py-lg-5">
				<h3 class="hny-title text-center mb-0 ">Latest Blog <span>Posts</span></h3>
				<p class="mb-5 text-center">Handpicked Favourites just for you</p>
			<div class="post-hny-grids row mt-5">
				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<a href="#">
						<figure>
							<img class="img-fluid" src="<?=base_url('Assets/User/images/bg1.jpg')?>" alt="blog-image">
						</figure>
					</a>

					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 10, 2023</li>
						</ul>
						<h4><a href="#">Newly Launched Branded Shades.</a></h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<a href="#">
						<figure>
							<img class="img-fluid" src="<?=base_url('Assets/User/images/bg2.jpg')?>" alt="blog-image">
						</figure>
					</a>
					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 13, 2023</li>
						</ul>
						<h4><a href="#">All new set of shoes for your style.</a></h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<figure>
						<img class="img-fluid" src="<?=base_url('Assets/User/images/bg3.jpg')?>" alt="blog-image">
					</figure>
					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 19, 2023</li>
						</ul>
						<h4><a href="#">Here to bring your life style to the next level.</a></h4>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<figure>
						<img class="img-fluid" src="<?=base_url('Assets/User/images/bg4.jpg')?>" alt="blog-image">
					</figure>
					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 30, 2023</li>
						</ul>
						<h4><a href="#">New Blazer to match your life style to the next level.</a></h4>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- //post-grids-->
<section class="w3l-customers-sec-6">
	<div class="customers-sec-6-cintent py-5">
		<!-- /customers-->
		<div class="container py-lg-5">
				<h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>
				<p class="mb-5 text-center">What People Say</p>
			<div class="row customerhny my-lg-5 my-4">
				<div class="col-md-12">
					<div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#customerhnyCarousel" data-slide-to="1"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">

							<div class="carousel-item active">
								<div class="row">
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para"> A fantastic organisation! Great cutomer support from beginning to end of the process. The team are really informed and go the extra mile at every stage. I would recommend them unreservedly.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="<?=base_url('Assets/User/images/c1.jpg')?>" class="img-fluid" alt="">
												<h5>Smith Roy</h5>

											</div>
										</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Great service, efficient communication and a really easy way to get a mortgage with lots of help and support to get the right deal</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="<?=base_url('Assets/User/images/c2.jpg')?>" class="img-fluid" alt="">
														<h5>Lora Grill</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">You’re really good at following up with the client so as to ensure that they are never left in the dark. Keep it up!</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="<?=base_url('Assets/User/images/c3.jpg')?>" class="img-fluid" alt="">
														<h5>Laura Sten</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">You're really good at focusing on what customers need and require. You have a real instinct to understand our customers. Good work!</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="<?=base_url('Assets/User/images/c4.jpg')?>" class="img-fluid" alt="">
														<h5>John Lee</h5>
		
													</div>
												</div>
									</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

							<div class="carousel-item">
								<div class="row">
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para"> A fantastic organisation! Great cutomer support from beginning to end of the process. The team are really informed and go the extra mile at every stage. I would recommend them unreservedly.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="<?=base_url('Assets/User/images/c4.jpg')?>" class="img-fluid" alt="">
														<h5>John Lee</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Great service, efficient communication and a really easy way to get a mortgage with lots of help and support to get the right deal.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="<?=base_url('Assets/User/images/c3.jpg')?>" class="img-fluid" alt="">
														<h5>Laura Sten</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
												<div class="feedback-hny">
													<span class="fa fa-quote-left"></span>
													<p class="feedback-para">The staff was great. The receptionists were very helpful and answered all our questions. The room was clean and bright, and the room service was always on time</p>
												</div>
												<div class="feedback-review mt-4">
													<img src="<?=base_url('Assets/User/images/c1.jpg')?>" class="img-fluid" alt="">
													<h5>Smith Roy</h5>
	
												</div>
											</div>
										</div>
										<div class="col-md-3">
												<div class="customer-info text-center">
														<div class="feedback-hny">
															<span class="fa fa-quote-left"></span>
															<p class="feedback-para">You're really good at focusing on what customers need and require. You have a real instinct to understand our customers. Good work!</p>
														</div>
														<div class="feedback-review mt-4">
															<img src="<?=base_url('Assets/User/images/c2.jpg')?>" class="img-fluid" alt="">
															<h5>Lora Grill</h5>
			
														</div>
													</div>
										</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

						</div>
						<!--.carousel-inner-->
					</div>
					<!--.Carousel-->

				</div>
			</div>
		</div>
	</div>
</section>



  <section class="w3l-footer-22">
      <!-- footer-22 -->
      <div class="footer-hny py-5">
          <div class="container py-lg-5">
              <div class="text-txt row">
                  <div class="left-side col-lg-4">
                      <h3><a class="logo-footer" href="">
                            Quick<span class="lohny">S</span>hop</a></h3>
                      <!-- if logo is image enable this   
                                    <a class="navbar-brand" href="#index.html">
                                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                    </a> -->
                      <p>As our understanding of sustainability and social responsibility grows, so do we increasingly recognise that design needs to adapt and innovate to meet these challenges. Fashion is not exempt from...</p>
                      <ul class="social-footerhny mt-lg-5 mt-4">

                          <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                          </li>
                      </ul>
                  </div>

                  <div class="right-side col-lg-8 pl-lg-5">
                      <h4>Women's Day Special Offer
                        All Branded Sandals are Flat 50% Discount</h4>
                      <div class="sub-columns">
                          <div class="sub-one-left">
                              <h6>Useful Links</h6>
                              <div class="footer-hny-ul">
                                  <ul>
                                      <li><a href="<?=base_url()?>">Home</a></li>
                                      <li><a href="<?=base_url('User_controller/about_user')?>">About</a></li>
                                      <li><a href="">Blog</a></li>
                                      <li><a href="<?=base_url('User_controller/contact_user')?>">Contact</a></li>
                                  </ul>
                                  <ul>
                                      <li><a href="#">Careers</a></li>
                                      <li><a href="#">Privacy Policy</a></li>
                                      <li><a href="#">Terms and Conditions</a></li>
                                      <li><a href="<?=base_url('User_controller/contact_user')?>">Support</a></li>
                                  </ul>
                              </div>

                          </div>
                          <div class="sub-two-right">
                              <h6>Our Store</h6>
                              <p class="mb-5"> Palace Rd, Chembukkav, Thrissur, Kerala 680020</p>

                              <h6>We accept:</h6>
                              <ul>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-visa"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-mastercard"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-paypal"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-amex"
                                              aria-hidden="true"></span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="below-section row">
                  <div class="columns col-lg-6">
                      <ul class="jst-link">
                          <li><a href="#">Privacy Policy </a> </li>
                          <li><a href="#">Term of Service</a></li>
                          <li><a href="<?=base_url('User_controller/contact_user')?>">Customer Care</a> </li>
                      </ul>
                  </div>
                  <div class="columns col-lg-6 text-lg-right">
                      <p>QuickShop | Codeigniter FrameWork | PHP <a href="" target="_blank">
                              </a>
                      </p>
                  </div>
                  <button onclick="topFunction()" id="movetop" title="Go to top">
                      <span class="fa fa-angle-double-up"></span>
                  </button>
              </div>
          </div>
      </div>
      <!-- //titels-5 -->
      <!-- move top -->

      <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
              scrollFunction()
          };

          function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  document.getElementById("movetop").style.display = "block";
              } else {
                  document.getElementById("movetop").style.display = "none";
              }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
          }
      </script>
      <!-- /move top -->
  </section>


  </body>

  </html>

<script src="<?=base_url('Assets/User/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=base_url('Assets/User/js/jquery-2.1.4.min.js')?>"></script>
<!--/login-->
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<!--//login-->
<script>
// optional
		$('#customerhnyCarousel').carousel({
				interval: 5000
    });
  </script>
 <!-- cart-js -->
 <script src="<?=base_url('Assets/User/js/minicart.js')?>"></script>
 <script>
     transmitv.render();

     transmitv.cart.on('transmitv_checkout', function (evt) {
         var items, len, i;

         if (this.subtotal() > 0) {
             items = this.items();

             for (i = 0, len = items.length; i < len; i++) {}
         }
     });
 </script>
 <!-- //cart-js -->
<!--pop-up-box-->
<script src="<?=base_url('Assets/User/js/jquery.magnific-popup.js')?>"></script>
<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="<?=base_url('Assets/User/js/bootstrap.min.js')?>"></script>

