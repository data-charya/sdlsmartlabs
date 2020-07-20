<?php require_once('../config/config.php'); 
      checkOut();
      editCheckOut();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Edit Blog | <?php echo count_mess(); ?></title>
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
        <h1>SDL SMARTLABS</h1>
        <img src="../img/logo.png" alt="" title="" />
      </div>

    </div>
  </header><!-- #header -->

   <!-- ************************************************************* 
      ---- Main-section start's
  ******************************************************************-->
  <main id="main">
      <!-- ************************************************************* 
      ---- Add Section Start's
    ****************************************************************-->
    <section id="add" style="margin-top: 60px;">
      <div class="container">

        <header class="section-header">
          <h3>Edit Blog</h3>
        </header>
            <div class="row">
                <div class="col-md-12 col-sm-12 no-padding">
                
                    <!-- START BLOG FROM -->
                    <div class="contact-form">
                        <form method="POST" enctype="multipart/form-data">
                        <?php editblog(); ?>
                            <div class="form-group col-md-6">
                                <input type="text" name="Title" class="form-control" id="title" placeholder="Title (Max. 100 characters)" value="<?php valedit(1); ?>" required />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="Author" class="form-control" id="author" placeholder="Author (Max. 100 characters)" value="<?php valedit(2); ?>" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image" class="col-md-4">Cover Image<br>[Less than 5MB]</label> Image cannot be changed. 
                            </div>
                            <div class="form-group col-md-6">
                                <input type="date" name="Date" class="form-control" id="date" placeholder="Date" value="<?php valedit(3); ?>" required />
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="6" name="Content" class="form-control" id="content" placeholder="Content" required><?php valedit(4); ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn-get-started" type="submit" name="submitblog"> Edit and Save</button>
                                <button class="btn-get-started" type="submit" name="goback"> Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- END BLOG FROM -->
                </div>
            </div>
        </div>
    </section>
    <!-- END ADD BLOG AREA -->

  
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
