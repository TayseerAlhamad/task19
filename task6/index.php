
<?php require "include/db.inc.php"; ?>

<?php
$resultimage = mysqli_query($conn, "SELECT * FROM image");
$rowimage = mysqli_fetch_assoc($resultimage);


$resultaboutas = mysqli_query($conn, "SELECT * FROM aboutas");
$rowaboutas = mysqli_fetch_assoc($resultaboutas);


$resultserves= mysqli_query($conn, "SELECT * FROM serves");
$rowserves = mysqli_fetch_assoc($resultserves);


$resultwork = mysqli_query($conn, "SELECT * FROM ourwork");
$rowwork  = mysqli_fetch_assoc($resultwork);

$resultteam = mysqli_query($conn, "SELECT * from ourteam");
$rowTeam  = mysqli_fetch_assoc($resultteam);

$resultfeedback = mysqli_query($conn, "SELECT * FROM feedback");
$rowfeedback  = mysqli_fetch_assoc($resultfeedback);


$resultfooter = mysqli_query($conn, "SELECT * from footer");
$rowfooter = mysqli_fetch_assoc($resultfooter);
?>



<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/WebsiteLogo.png" type="image/png">
	<title>Clever Mind POB</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">

<style>

	.dana{
		position: absolute;
		left:250px;
		color: #fff;
	
	}
	.testimonial_area .active_testimonial .owl-dots {
    height: 78PX;}

	.Team{
		position: absolute;
		right:250px;
		color: #fff;

	}
	.impress_area{
		height: 900px;
	}
</style>


</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="#"><img src="img/WebsiteLogo.png" width="70px" height="75px" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#xx">About Us</a></li>
							<li class="nav-item"><a class="nav-link" href="#our">Our Services</a></li>
					<li class="nav-item"><a class="nav-link" href="#pag"> Our Works</a></li>
							
							<li class="nav-item"><a class="nav-link" href="#team">Our Team</a></li>	
						
							
							<li class="nav-item"><a class="nav-link" href="#us">Contact Us</a></li>
						</ul>
					
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================class image one =================-->
	<section class="home_banner_area">
    <div class="banner_inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="banner_content">
              <h2><?php echo $rowimage["textone"] ?? "" ?></h2>
              <p><?php echo $rowimage["texttwo"] ?? "" ?></p>
              <div class="d-flex align-items-center">
                <a class="primary_btn" href="#section_2"><span>Get Started</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="home_right_img">
              <!-- عرض الصورة الموجودة في العمود الثالث -->
              <img class="img-fluid" src="./uploade<?php echo $rowimage["photo1"]; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
	<!--================End Home Banner Area =================-->

	<!--================Start classtwo aboutas =================-->
	<section class="section_gap features_area" id="section_2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            <p class="top_title"><?php echo  $rowaboutas["text1"] ?? "" ?></p>
            <h2><?php echo  $rowaboutas["text2"] ?? "" ?></h2>
            <p>
              <?php echo   $rowaboutas["text3"] ?? "" ?>
            </p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="left_features">
            <img class="img-fluid" src="../paper-dashboard-master/upload/<?php echo  $rowaboutas['title1'] ?? "" ?>" alt="photo" />
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <!-- single features -->
          <div class="single_feature">
            <div class="feature_head">
              <span class="lnr lnr-screen"></span>
              <h4><?php echo  $rowaboutas["title2"] ?? "" ?></h4>
            </div>
          </div>
          <!-- single features -->
          <div class="single_feature">
            <div class="feature_head">
              <span class="lnr lnr-screen"></span>
              <h4><?php echo  $rowaboutas["title3"] ?? "" ?></h4>
            </div>
          </div>
          <!-- single features -->
          <div class="single_feature">
            <div class="feature_head">
              <span class="lnr lnr-screen"></span>
              <h4> <?php echo  $rowaboutas["photo"] ?? "" ?> </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!--================End Features Area =================-->

	<!--================Recent section tree our serves =================-->
	<section class="recent_update_area" id="our">
		<div class="container">
			<div class="recent_update_inner">
				<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
							<span class="lnr lnr-screen"></span>
							<h6><?php echo  $rowserves["text1"] ?? "" ?></h6>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
						 aria-selected="false">
						 <span class="lnr lnr-screen"></span>
						 <h6><?php echo  $rowserves["text2"] ?? "" ?></h6>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
						 aria-selected="false">
						 <span class="lnr lnr-screen"></span>
						 <h6><?php echo  $rowserves["text3"] ?? "" ?> </h6>
						</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="row recent_update_text align-items-center">
							<div class="col-lg-5">
								<div class="common_style">
									<p class="line"><?php echo  $rowserves["text1"] ?? "" ?></p>
									
									<p><?php echo  $rowserves["text4"] ?? "" ?>
										</p>
					
								</div>
							</div>
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/chart.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row recent_update_text align-items-center">
							<div class="col-lg-5">
								<div class="common_style">
									<p class="line"><?php echo  $rowserves["text2"] ?? "" ?></p>
								
									<p><?php echo  $rowserves["text5"] ?? "" ?>
										</p>
							
								</div>
							</div>
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/chart.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row recent_update_text align-items-center">
							<div class="col-lg-5">
								<div class="common_style">
									<p class="line"><?php echo  $rowserves["text3"] ?? "" ?></p>
								
									<p><?php echo  $rowserves["text6"] ?? "" ?></p>
								</div>
							</div>
							<div class="col-lg-6 text-right">
								<div class="chart_img">
									<img class="img-fluid" src="img/chart.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Recent Update Area =================-->

	<!--================section four ourwork $$ =================-->
	<section class="section_gap big_features">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<p class="top_title">Our Works Features</p>
						<h2>Amazing Features That make it Awesome!</h2>
						<p>The finest business consulting services in the area. Financial advice that can
							save you time and money.
							</p>
					</div>
				</div>
			</div>
			<div class="row features_content" id="pag">
				<div class="col-lg-4 offset-lg-1">
					<div class="big_f_left">
						<img class="img-fluid" src="img/f-img1.png" alt="">
					</div>
				</div>
				<div class="col-lg-4 offset-lg-2">
					<div class="common_style">
						<p class="line"> <?php echo $rowwork["text1"];?></p>
						<h3><?php echo $rowwork["text2"];?></h3>
						<p><?php echo $rowwork["text3"];?> </p>
	
					</div>
				</div>
				<div class="border-line"></div>
				<img class="shape1"src="img/shape1.png" alt="">		
				<img class="shape2"src="img/shape2.png" alt="">		
				<img class="shape3"src="img/shape1.png" alt="">		
			</div>

			<div class="row features_content bottom-features">
				<div class="col-lg-5">
					<div class="common_style">
						<p class="line"><?php echo $rowwork["text4"];?></p>
						<h3>Your Business Grows Up  
							<br> is Our Role</h3>
						<p> Integrity , Responsibility , Passion and Teamwork are Our
							Rules in Clever Mind ICT, For Best and Faster Services to Our Clients.
							</p>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-2">
					<div class="big_f_left">
						<img class="img-fluid" src="img/f-img2.png" alt="">
					</div>
				</div>
				<div class="border-line"></div>
				<img class="shape1"src="img/shape1.png" alt="">		
				<img class="shape2"src="img/shape2.png" alt="">		
				<img class="shape3"src="img/shape1.png" alt="">		
			</div>
		</div>
	</section>
	<!--================End Big Features Area =================-->
	
	<!--================ section feedback =================-->
	<div class="section_gap_top testimonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<p class="top_title">what our clint say about as</p>
						<h2>What Our Clients Say About Us</h2>
						<p><?php echo $rowfeedback["text1"]; ?></p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="active_testimonial owl-carousel" data-slider-id="1">
						<!-- single testimonial -->
						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4><?php echo $rowfeedback["text2"]; ?></h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p><?php echo $rowfeedback["text3"]; ?>.
								</p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4><?php echo $rowfeedback["text4"]; ?></h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>We Build Our Path Career So Good .</p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>USA Transport Companies</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>Our Experiens Was So Great With Clever Mind POB .</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

	<!--================Impress section five our team =================-->
	<section class="impress_area" id="team">
    <div class="container">
        <div class="impress_inner">
            <h2>Our Team</h2>
            <div class="dana">
                <img src="<?php echo $photo1_url; ?>" alt="Photo 1" width="150" height="150">
                <h3><?php echo $rowTeam["text1"] . "<br><br>" . $rowTeam["text2"]; ?></h3>
            </div>
            <div class="Team">
                <img src="<?php echo $photo2_url; ?>" alt="Photo 2" width="150" height="150">
                <h3><?php echo $rowTeam["text3"] . "<br><br>" . $rowTeam["text4"]; ?></h3>
            </div>
        </div>
    </div>
</section>
	<!--================End Impress Area =================-->


	<!--================Footer Area =================-->
	<footer class="footer_area" id="us">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h3>Contact Us</h3>
						</div>
						<p><?php echo $rowfooter["text1"];?> <br>
						
						<?php echo $rowfooter["text2"];?><br>
						<?php echo $rowfooter["text3"];?></p>
						<p>All rights reserved | This templete is made with Clever Mind POB</p>
					</aside>
				</div>
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3>Our Location</h3>
						</div>
						<p>	<?php echo $rowfooter["text4"];?>
							<br>ZINC -23</p>
						<div id="mc_embed_signup">
						<iframe src="<?php echo $rowfooter["text5"];?>" width="305px" height="140px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</aside>
				</div>
				<div class="col-lg-2">
					<aside class="f_widget social_widget">
						<div class="f_title">
							<h3>Follow Me</h3>
						</div>
						<p>Let us be social</p>
						<ul class="list">
							<li><a href="<?php echo $rowfooter["text7"];?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo $rowfooter["text8"];?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php echo $rowfooter["text9"];?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
						
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>