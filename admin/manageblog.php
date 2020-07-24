<?php require_once('../config/config.php'); 
      checkOut();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo count_mess(); ?></title>
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
  <link href="../css/custom.css" rel="stylesheet">
  <link href="../css/manageblog.css" rel="stylesheet">

</head>

<body>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">SDL SMARTLABS</a></h1>
        <a href="#intro"><img src="../img/logo.png" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="dashboard.php">Dashboard</a></li>
          <li><a href="manageblog.php">Blogs</a></li>
          <li><a href="managemessage.php">Messages</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="../img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Managing Blogs.</h2>
                <a href="#summary" class="btn-get-started scrollto">Summary</a>
                <a href="#add" class="btn-get-started scrollto">Add</a>
                <a href="#manage" class="btn-get-started scrollto">Manage</a>
              </div>
            </div>
          </div>

       
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    <!-- ************************************************************* 
      ---- Summary Section Start's
    ****************************************************************-->
    <section id="summary" style="margin-top: 60px;">
      <div class="container">

        <header class="section-header">
          <h3>Summary</h3>
        </header>

        
        <div style="margin-top: 60px;" class="row">
          <div class="col-md-12" style="text-align: justify;">
            <?php summary_report(); ?>
            <br>
        <h4> Note:</h4>
        <button class='btn-up'>
            <i class='fa fa-plus'></i>
        </button> - Added to the blogs in <b>Our Blogs</b><br>
        <button class='btn-up'>
            <i class='fa fa-arrow-up'></i>
        </button> - Added to the blogs in the <b>slider</b> of the <b>Main Page</b><br>
        <button class='btn-up'>
            <i class='fa fa-thumb-tack'></i>
        </button> - Pinned to the blogs in the <b>silder</b> of the <b>Main Page</b><br>
        <button class='btn-up'>
            <i class='fa fa-trash'></i>
        </button> - <b>Permanently deletes</b> from blogs in the database</b>
        
          </div>
        </div>
      </div>
    </section><!-- #summary -->
    
  
    <!-- ************************************************************* 
      ---- Add Section Start's
    ****************************************************************-->
    <section id="add" style="margin-top: 60px;">
      <div class="container">

        <header class="section-header">
          <h3>Add Blog</h3>
        </header>

            <div class="row">
                <div class="col-md-12 col-sm-12 no-padding">
                    <!-- START BLOG FROM -->
                    <div class="contact-form">
                    <?php insert_into_blog();  ?>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group col-md-6">
                                <input type="text" name="Title" class="form-control" id="title" placeholder="Title (Max. 100 characters)" required />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="Author" class="form-control" id="author" placeholder="Author (Max. 100 characters)" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image" class="col-md-4">Cover Image<br>[Less than 5MB]</label><input type="file" name="image" required accept=".gif,.jpg,.jpeg,.png">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="date" name="Date" class="form-control" id="date" placeholder="Date" required />
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="6" name="Content" class="form-control" id="content" placeholder="Content" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn-get-started" type="submit" name="submitblog"> Upload</button>
                            </div>
                        </form>
                    </div>
                    <!-- END BLOG FROM -->
                </div>
            </div>
        </div>
    </section>
    <!-- END ADD BLOG AREA -->

    <!-- ************************************************************* 
      ---- Manage Section Start's
    ****************************************************************-->
         <!-- START MANAGE AREA -->
       <section id="manage" style="margin-top: 30px; padding-top: 30px;">
      <div class="container">

        <header class="section-header">
          <h3>Manage Blogs</h3>
        </header>

            <div class="row">
                <div class="col-md-12 col-sm-12 no-padding">
                    <table class="table">
                        <tr>
                            <th>Cover Image</th>
                            <th width="7%">Author</th>
                            <th width="7%">Date</th>
                            <th width="60%"><p align='center'>Content</p></th>
                            <th><p align='center'>Delete</p></th>
                            <th><p align='center'>Upload</p></th>
                        </tr>
                        <?php if(count_upblog(0)>0 || count_upblog(1)>0 || count_upblog(2)>0 || count_upblog(3)>0) {
                                display();
                                echo "</table>";
                            } else {
                                echo " </table>";
                                echo "<p class='error'>No blogs! Add a blog!</p>";   
                            }
                        ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END MANAGE AREA -->
  <?php update_row(); ?>

    <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>SDL SMARTLABS</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
           
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SDL SMARTLABS</strong>. All Rights Reserved
      </div>
      <div class="credits">
    </div>
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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
    <!-- Slider Script files-->
    <script src="../files/slider/js/swiper.js"></script>
    <script src="../files/slider/js/script.js"></script>
    <script src="../files/slider/js/swiper.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
