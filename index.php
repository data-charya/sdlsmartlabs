<?php require_once('config/config.php'); 
      unset($_SESSION['readmore']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .g-recaptcha{
            display: none;
        }
    </style>
  <meta charset="utf-8">
  <title>SDL SMARTLABS</title>
  <!-- S.E.O -->
  
  <!--End of S>E.O-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/site.webmanifest">
  <!-- Favicons End -->
  <!-- Recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <!-- End Recaptcha -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!--Slider Files-->
    <link href="files/slider/css/swiper.css" rel="stylesheet">
    <link href="files/slider/css/swiper.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/blog.css" rel="stylesheet">
  <!-- Auth -->
   <script>
   function onSubmit(token) {
     document.getElementById("form-demo").submit();
   }
 </script>
 <!-- Auth -->

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1 style="color:white"><a href="#intro" class="scrollto"><a href="#intro"><img src="img/favicon/favicon.ico" alt="SDL" title="SDL" /></a>SMARTLABS</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#blog">Blogs</a></li>
          <li><a href="#contact">Contact</a></li>
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
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are a group of Tech Enthusiasts.</h2>
                  <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Get yourself Established on the Web.</h2>
                 <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>UI/UX prototypes and Logo Designing.</h2>
                
                <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Innovative IOT Kits. </h2>
                 <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Lets accomplish more together.</h2>
                
                <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Our aim at SDL SMARTLABS is to provide quality service and achieve customer satisfaction.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Here's what our resourceful team of developers can provide you.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Web Development</a></h4>
            <p class="description">Websites developed with utmost standards at negotiable price ranges.Whatever website you need,we've got you covered!</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Logo Design</a></h4>
            <p class="description">Logo designs made from scratch based on your requierments for websites and apps.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">UI/UX Design</a></h4>
            <p class="description">UI designs that can bring your imagination to life.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">IOT Products</a></h4>
            <p class="description">Tailolr made IOT kits,making world much more accesible to technology.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Digital Marketing</a></h4>
            <p class="description">Having trouble lauching your buisness on the web? We can help you establish instead. </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">App Development</a></h4>
            <p class="description">We create android apps to help your digital buisness grow further.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Contact us for more information or to avail our services.</p>
        <a class="cta-btn" href="#contact">Call To Action</a>
      </div>
    </section><!-- #call-to-action -->

    

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">5</span>
            <p>Clients</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20</span>
            <p>Projects</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">100</span>
            <p>Hours Of Support</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Hard Workers</p>
  				</div>
    </section><!-- #facts -->
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Our diverse team of experinced innovators.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team/Vignesh.jpg" class="img-fluid" alt="Vignesh">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Vignesh Shetty</h4>
                  <span>Web Developer</span>
                  <div class="social">
                    <a href="https://twitter.com/vigneshshettyin" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/eu-clid" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=vigneshshettyalike@gmail.com" target ="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/vignesh-shetty-186bab160" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Shanwill.jpg" class="img-fluid" alt="Shanwill">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Shanwill Pinto</h4>
                  <span>UI/UX Developer</span>
                  <div class="social">
                    <a href="https://twitter.com/Shanwil21164758?s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/data-charya" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=shanwillpinto@gmail.com" target ="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/shanwill-pinto-b286b7184/" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/Sriganesh.png" class="img-fluid" alt="Sriganesh">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sriganesh Rao</h4>
                  <span>Web Developer</span>
                  <div class="social">
                    <a href="https://twitter.com/SorcererKing1?s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/Xfinity-bot" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=sriganesh7334@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/mwlite/in/sriganesh-rao-1b6a921a5" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/Naxatra.jpeg" class="img-fluid" alt="Naxatra">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Naxatra Vasaani</h4>
                  <span>Web Developer</span>
                  <div class="social">
                    <a href="https://twitter.com/naxatravasaani?s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/naxatra23" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=naxatravasaani23@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/naxatravasaani" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team/Vaibhav.jpg" class="img-fluid" alt="Vaibhav">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Vaibhav Suvarna</h4>
                  <span>Digital Marketing Executive</span>
                  <div class="social">
                    <a href="https://twitter.com/vaibhav_suvarna" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=https://github.com/Dreamer007VS" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=vaibhavksuvarna30@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/vaibhav-k-suvarna-690441171/" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Pranith.jpg" class="img-fluid" alt="Pranith">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Pranith Rao</h4>
                  <span>Product Marketing Manager</span>
                  <div class="social">
                    <a href="https://twitter.com/rao_pranith" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/pranith-rao" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=pranithrao3@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/pranith-rao-036a821a5/" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/Rahul.jpg" class="img-fluid" alt="Rahul">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rahul Rao</h4>
                  <span>Android Developer</span>
                  <div class="social">
                    <a href="https://twitter.com/rahul232000" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/rahul-rajesh-rao" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=rahul232000@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/rahul-rao-02a458190" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/champa.jpg" class="img-fluid" alt="Nireekshith">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nireekshith Kottary</h4>
                  <span>Web Developer</span>
                  <div class="social">
                    <a href="https://twitter.com/nirikshith_k18?s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/nirikshith-k18" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=nireekshithrkottary18@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/nireekshith-kottary-706a7816a" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Novin.jpg" class="img-fluid" alt="Novin">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Novin Misquith</h4>
                  <span>Web Developer</span>
                  <div class="social">
                    <a href="https://twitter.com/novinmisquith?s=08" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/shutterberg" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=misquithin@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/novin-misquith-50ba7016a" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/Shaun.jpg" class="img-fluid" alt="Shaun">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Shaun Dsouza</h4>
                  <span>Iot Architect</span>
                  <div class="social">
                    <a href="https://twitter.com/its_shaundsouza?s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/shaun-dsouza" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=shaun.dsouza77@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://www.linkedin.com/in/shaun-d-souza-6659a61aa" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    
    <!-- ************************************************************* 
      ---- Blog Section start's
  ******************************************************************-->
  <section id="blog" style="margin-top: 30px; padding-top: 30px;" class="silder-bg wow fadeInUp">
    <div class="container">
      <div class="swiper-container">
        <div class="swiper-title">
          <h2>Our Blog</h2>
        </div>
        <div class="swiper-wrapper">
          <?php main_display(1); 
          main_display(2); ?>
        </div>
        <!-- Add Pagination -->
      </div>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
         
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Mangalore, India</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+918088256036">+91 8088256036/+91 9742257693</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:support@sdlsmartlabs.co.in">support@sdlsmartlabs.co.in</a></p>
            </div>
          </div>

        </div>
  <?php message_contact(); ?>
        <div class="form">
          <form method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required/>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required/>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="text-center"><button type="submit" name="send" value="send">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>SDL SMARTLABS</h3>
            <p>DISCOVER INNOVATE SUCCED.<br>A company that delivers high-end digital services. </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
             Mangalore,India.<br>
              <strong>Phone:</strong> +91 8088256036<br> 
              <strong>Email:</strong> support@sdlsmartlabs.co.in<br>
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
            <p>Keep yourself updated with latest news from SDL SMARTLABS.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"value="Subscribe">
            </form>
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
    <button class="g-recaptcha" 
        data-sitekey="6LfWsbUZAAAAAOL8pAkmI-2rAxgh5m4TRwxu7Czn" </button>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!--Preloader<div id="preloader"></div>-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5f0577ba223d045fcb7b85c5/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
      <!--End of Tawk.to Script-->
      
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
    <!-- Slider Script files-->
    <script src="files/slider/js/swiper.js"></script>
    <script src="files/slider/js/script.js"></script>
    <script src="files/slider/js/swiper.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
