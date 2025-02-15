<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <style> 
   .index {
    width: 100%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .index label h4 {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .index input[type="text"] {
    width: calc(50% - 10px);
    height: 40px;
    border-radius: 5px;
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    font-size: 16px;
  }

  .index input[type="text"]::placeholder {
    color: #999;
    font-style: italic;
  }

  .add {
    color: white;
    background-color: chartreuse;
    width: 20%;
    height: 50px;
    font-size: 1.2em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .add:hover {
    background-color: #7fff7f;
  }
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <!-- slaider -->
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Your Logo
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="javascript:;">
              <i class="nc-icon nc-bank"></i>
              <!-- section one -->
              <p><a href="imagesection1.php">image section</a></p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <!-- section two -->
              <i class="nc-icon nc-diamond"></i>
              <p><a href="aboutus2.php">about as</a> </p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <!-- section tree -->
              <i class="nc-icon nc-pin-3"></i>
              <p><a href="ourservise3.php">ourservice</a></p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <!-- section tree -->
              <i class="nc-icon nc-pin-3"></i>
              <p><a href="ourwork4.php">ourwork</a></p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <!-- section tree -->
              <i class="nc-icon nc-pin-3"></i>
              <p><a href="ourteam5.php">our team </a></p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <!-- section tree -->
              <i class="nc-icon nc-pin-3"></i>
              <p><a href="userfeedback6.php">user feedback </a></p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <!-- section tree -->
              <i class="nc-icon nc-pin-3"></i>
              <p><a href="footer7.php">footer </a></p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Title</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">

          <div class="col-md-12">
  <form class="index" action="footerdata.php" method="post">
    <label><h4>Edit Contact Information</h4></label>
    <input type="text" name="text1" placeholder="Edit Title"><br>
    <input type="text" name="text2" placeholder="Edit Phone Title"><br>
    <input type="text" name="text3" placeholder="Edit Email"><br>
    <input type="text" name="text4" placeholder="Edit Our Location"><br>
    <input type="text" name="text5" placeholder="Edit Title"><br>
    <input type="text" name="text6" placeholder="Edit Follow Me URL"><br>
    <input type="text" name="text7" placeholder="Edit Facebook URL"><br>
    <input type="text" name="text8" placeholder="Edit Instagram URL"><br>
    <input type="text" name="text9" placeholder="Edit Twitter URL"><br>
    <button type="submit" class="add">Add</button>
  </form>
</div>

          </div>
        </div>
      </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © 2020, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
