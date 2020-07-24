<?php require_once('../config/config.php'); 
      checkIn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SDL SMARTLABS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../img/favicon/site.webmanifest">
  <!-- Favicons End -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!--Slider Files-->
    <link href="../files/slider/css/swiper.css" rel="stylesheet">
    <link href="../files/slider/css/swiper.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/blog.css" rel="stylesheet">
  <link href="../css/custom.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1>SDL SMARTLABS</h1>
        <img src="../img/logo.png" alt="" title="" />
      </div>

    </div>
  </header><!-- #header -->


  <div class="container ">
        <div class="row">            
            <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
                <div class="login-content">
                    <div class="login-body"> 
                    <?php user_validation(); ?> 
                        <form method="POST" class="login-form">
                            <div class="form-group ">
                                <div class="pos-r">                                        
                                    <input id="form-username" type="text" name="Username" placeholder="Enter your Username" class="form-username form-control" required>
                                    <i class="fa fa-user"></i>
                                    <span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="pos-r">                                    
                                    <input id="form-password" type="password" name="Password" placeholder="Enter your Password" class="form-password form-control" required>
                                    <i class="fa fa-lock"></i>
                                    <span></span>                                        
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="pos-r">
                                    <button type="submit" name="submit" class="btn">Login</button>
                                </div>
                            </div>    
                            <div class="form-group">
                                <div class="pos-r">
                                    Want to head to main website? <a href="../index.php">Click Here!</a>
                                </div>
                            </div>      
                        </form>
                    </div> 
                </div>
                <!-- end  login-body -->         
            </div>
        </div>
    </div>
    <!-- end container -->
 

 <!-- JavaScript Libraries -->
 <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>
    <!-- Slider Script files-->
    <script src="../files/slider/js/swiper.js"></script>
    <script src="../files/slider/js/script.js"></script>
    <script src="../files/slider/js/swiper.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
