<?php require "include/db.inc.php"; ?>


<?php
$resultFooter = mysqli_query($conn, "select * from footer");
$rowFooter = mysqli_fetch_assoc($resultFooter);


$resultHome = mysqli_query($conn, "select * from home");
$rowHome = mysqli_fetch_assoc($resultHome);


$resultAbout = mysqli_query($conn, "select * from about");
$rowAbout = mysqli_fetch_assoc($resultAbout);


$resultTeam = mysqli_query($conn, "select * from team");
$rowTeam  = mysqli_fetch_assoc($resultTeam);

$resultSlider = mysqli_query($conn, "select * from slider");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/Website Logo.png" type="image/png" />
  <title>Clever Mind</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/flaticon/flaticon.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/custome-style.css" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/Website Logo.png" alt="LOGO" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">


              <?php
              $result = mysqli_query($conn, "select * from navbar");
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<li class='nav-item'>
                <a class='nav-link' href={$row['link']}>{$row['title']}</a>
              </li>";
              }
              ?>

            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item d-block">
                <a href="../paper-dashboard-master/index.php" target="_blank" class="primary_btn text-uppercase">Dashboard</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="home_banner_area">
    <div class="banner_inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="banner_content">
              <h2> <?php echo $rowHome["title"] ?? "" ?></h2>
              <p>
                <?php echo $rowHome["description"] ?? "" ?>
              </p>
              <div class="d-flex align-items-center">
                <a class="primary_btn" href="#section_2"><span>Get Started</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="home_right_img">
              <img class="img-fluid" src="img/banner/home-right.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Start Features Area =================-->
  <section class="section_gap features_area" id="section_2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            <p class="top_title"><?php echo $rowAbout["top_title"] ?? "" ?></p>
            <h2><?php echo $rowAbout["title"] ?? "" ?></h2>
            <p>
              <?php echo  $rowAbout["description"] ?? "" ?>
            </p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="left_features">
            <img class="img-fluid" src="../paper-dashboard-master/upload/<?php echo $rowAbout['image_Path'] ?? "" ?>" alt="photo" />
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <!-- single features -->
          <div class="single_feature">
            <div class="feature_head">
              <span class="lnr lnr-screen"></span>
              <h4><?php echo $rowAbout["sub_title2"] ?? "" ?></h4>
            </div>
          </div>
          <!-- single features -->
          <div class="single_feature">
            <div class="feature_head">
              <span class="lnr lnr-screen"></span>
              <h4><?php echo $rowAbout["sub_title3"] ?? "" ?></h4>
            </div>
          </div>
          <!-- single features -->
          <div class="single_feature">
            <div class="feature_head">
              <span class="lnr lnr-screen"></span>
              <h4> <?php echo  $rowAbout["sub_title4"] ?? "" ?> </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Features Area =================-->

  <!--================Recent Update Area =================-->
  <section class="recent_update_area">
    <div class="container">
      <div class="recent_update_inner">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
              <span class="lnr lnr-screen"></span>
              <h6>Development</h6>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
              <span class="lnr lnr-screen"></span>
              <h6>Training</h6>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
              <span class="lnr lnr-screen"></span>
              <h6>ICC</h6>
            </a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row recent_update_text align-items-center">
              <div class="col-lg-5">
                <div class="common_style">
                  <p class="line">Modern Daesign Trends</p>
                  <h3>
                    We Believe that <br />
                    Inner beauty Lasts Long
                  </h3>
                  <p>
                    inappropriate behavior is often laughed off as “boys will
                    be boys,” women face higher conduct standards especially
                    in the workplace. That’s why it’s crucial that as women.
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="chart_img">
                  <img class="img-fluid" src="img/chart.png" alt="" />
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row recent_update_text align-items-center">
              <div class="col-lg-5">
                <div class="common_style">
                  <p class="line">Modern Daesign Trends</p>
                  <h3>
                    We Believe that <br />
                    Inner beauty Lasts Long
                  </h3>
                  <p>
                    inappropriate behavior is often laughed off as “boys will
                    be boys,” women face higher conduct standards especially
                    in the workplace. That’s why it’s crucial that as women.
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="chart_img">
                  <img class="img-fluid" src="img/chart.png" alt="" />
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row recent_update_text align-items-center">
              <div class="col-lg-5">
                <div class="common_style">
                  <p class="line">Modern Daesign Trends</p>
                  <h3>
                    We Believe that <br />
                    Inner beauty Lasts Long
                  </h3>
                  <p>
                    inappropriate behavior is often laughed off as “boys will
                    be boys,” women face higher conduct standards especially
                    in the workplace. That’s why it’s crucial that as women.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 text-right">
                <div class="chart_img">
                  <img class="img-fluid" src="img/chart.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Recent Update Area =================-->

  <!--================Start Big Features Area =================-->
  <section class="section_gap big_features">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            <p class="top_title">Our Works Features</p>
            <h2>Amazing Features That make it Awesome!</h2>
            <p>
              The finest business consulting services in the area. Financial
              advice that can save you time and money.
            </p>
          </div>
        </div>
      </div>
      <div class="row features_content">
        <div class="col-lg-4 offset-lg-1">
          <div class="big_f_left">
            <img class="img-fluid" src="img/f-img1.png" alt="" />
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="common_style">
            <p class="line">Modern Business Thinking</p>
            <h3>
              We Believe that <br />
              Inner beauty Lasts Long
            </h3>
            <p>
              The finest business consulting services in the area. Financial
              advice that can save you time and money. Marketing experience
              that counts when trying to reach your customer base & by
              managing your tech software.(Note:Delete
            </p>
          </div>
        </div>
        <div class="border-line"></div>
        <img class="shape1" src="img/shape1.png" alt="" />
        <img class="shape2" src="img/shape2.png" alt="" />
        <img class="shape3" src="img/shape1.png" alt="" />
      </div>

      <div class="row features_content bottom-features">
        <div class="col-lg-5">
          <div class="common_style">
            <p class="line">Works Fast</p>
            <h3>Your Business Grows Up, is Our Role</h3>
            <p>
              Integrity ,Responsibility ,Passion and Teamwork are Our Rules in
              Clever Mind ICT, For Best and Faster Services to Our Clients.
              (Note ): Delete Learn More Button
            </p>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2">
          <div class="big_f_left">
            <img class="img-fluid" src="img/f-img2.png" alt="" />
          </div>
        </div>
        <div class="border-line"></div>
        <img class="shape1" src="img/shape1.png" alt="" />
        <img class="shape2" src="img/shape2.png" alt="" />
        <img class="shape3" src="img/shape1.png" alt="" />
      </div>
    </div>
  </section>
  <!--================End Big Features Area =================-->

  <!--================Srart Pricing Area =================-->

  <!--================End Pricing Area =================-->

  <!--================ Start Testimonial Area =================-->
  <div class="section_gap_top testimonial_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            <p class="top_title">User Feedback</p>
            <h2>What Our Clients Say About Us</h2>
            <p>So Proud Of Our Clients and Students Feedback</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="active_testimonial owl-carousel" data-slider-id="1">
            <!-- single testimonial -->

            <?php
            if (mysqli_num_rows($resultSlider) > 0)
              while ($rowSlider = mysqli_fetch_assoc($resultSlider)) {
                echo '
                <div class="single_testimonial">
                <div class="testimonial_head">
                  <img src="img/quote.png" alt="" />
                  <h4> ' . $rowSlider["name"] . '</h4>
                  <div class="review">
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i> 
                   <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="testimonial_content">
                  <p> ' .
                  $rowSlider["text_desc"]
                  . '
                  </p>
                </div>
              </div>
                ';
              }
            ?>


          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================ End Testimonial Area =================-->

  <!--================ Srart Brand Area =================-->

  <!--================ End Brand Area =================-->

  <!--================Impress Area =================-->
  <section class="impress_area">
    <div class="container">
      <div class="impress_inner">
        <h2 class="mb-4">
          <?php echo  $rowTeam["title"] ?? ""; ?>
        </h2>
        <div class="row justify-content-center">
          <div class="col-md-6 mb-4">
            <img src="../paper-dashboard-master/upload/<?php echo $rowTeam['image_one_path'] ?>" class="team__pic" alt="" />
            <h2>
              <?php echo  $rowTeam["image_one_title"] ?? ""; ?>

            </h2>
            <h2> <?php echo  $rowTeam["image_one_subtitle"] ?? ""; ?>
            </h2>
          </div>
          <div class="col-md-6">
            <img src="../paper-dashboard-master/upload/<?php echo $rowTeam['image_tow_path'] ?>" class="team__pic" alt="" />
            <h2>
              <?php echo  $rowTeam["image_tow_title"] ?? ""; ?>

            </h2>
            <h2> <?php echo  $rowTeam["image_tow_subtitle"] ?? ""; ?>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Impress Area =================-->

  <!--================Footer Area =================-->


  <footer class="footer_area">
    <div class="container">
      <div class="row footer_inner">
        <div class="col-lg-5 col-sm-6">
          <aside class="f_widget ab_widget">
            <div class="f_title">
              <h3><?php echo $rowHome["title"] ?? "" ?></h3>
            </div>
            <p>
              <i class="fa fa-phone-square"></i>
              <span><?php echo $rowFooter["call_text"] ?? "" ?></span>
              <br />
              <i class="fa fa-envelope"></i>
              <span><?php echo $rowFooter["email"] ?? "" ?></span>
            </p>

            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | This template is made with
              <i class="fa fa-heart-o" aria-hidden="true"></i> by
              <a href="#" target="_blank">POB</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </aside>
        </div>
        <div class="col-lg-5 col-sm-6">
          <aside class="f_widget news_widget">
            <div class="f_title">
              <h3>Location</h3>
            </div>
            <p>
              <?php echo $rowFooter["address1"] ?? "" ?>
              <br />
              <?php echo $rowFooter["address2"] ?? "" ?>
            </p>
            <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13537.238900635753!2d35.8225135!3d31.9796183!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97e1a09530f58612!2sClever%20Mind%20POB%20ICT!5e0!3m2!1sen!2sjo!4v1644337066440!5m2!1sen!2sjo" width="300" height="300" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </aside>
        </div>
        <div class="col-lg-2">
          <aside class="f_widget social_widget">
            <div class="f_title">
              <h3>Follow Us</h3>
            </div>
            <p>Let us be social</p>
            <ul class="list">
              <li>
                <a href="<?php echo  $rowFooter['facebook_link'] ?? "#" ?>" target="_blank"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="<?php echo  $rowFooter['twitter_link'] ?? "#" ?>" target="_blank"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="<?php echo $rowFooter['insta_link'] ?? "#" ?>" target="_blank"><i class="fa fa-instagram"></i></a>
              </li>
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