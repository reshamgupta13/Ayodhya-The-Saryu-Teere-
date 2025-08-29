<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mall of Awadh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Cardo:wght@400;700&family=Cookie&family=Fasthand&family=Geologica:wght@700&family=Kalam:wght@300&family=Kaushan+Script&family=Pacifico&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  #hero{
  background-image: url("assets/img/mall/2.jpg");
  height:100vh;
  }
  #hero:before{
  content: "";
  background: rgba(0, 0, 0, 0.4);
  position: absolute;
  inset: 0;
}
#hero h2 {
  color: white;
  position: relative;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <div class="row col-md-12">
<div class="col-md-4">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="assets/img/Mall/logo.png" width="50px" height="70px" alt=""> 
         <h1 style="font-size:40px; color:Red; font-family: 'Kaushan Script', cursive; font-weight:bold;">M</h1><span style="font-family: 'Kaushan Script',cursive; font-size:25px; font-weight:bold;">all of Avadh</span><br><p class="d-flex align-items-end"> <sub  class="mt-5 fw-bold" style="font-family: 'Kaushan Script',cusive; font-size:18px; color:red;">The Saryu Teere</sub></p>
      </a>
</div>
<div class="row col-md-8">
<nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li class="dropdown"><a href="index.php"><span>EXPLORE AYODHYA</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="Landmarks.php">LANDMARKS</a></li>
              <li class="dropdown"><a href="Temples.php"><span>TEMPLES</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="Temples.php">RAM JANAM BHOOMI</a></li>
                  <li><a href="Temples.php">KANAK BHAVAN</a></li>
                  <li><a href="Temples.php">HANUMAN GADHI</a></li>
                  <li><a href="Temples.php">DASHRATH MAHAL</a></li>
                  <li><a href="Temples.php">NAGESHVARNATH</a></li>
                  <li><a href="Temples.php">KSHIRESHVARNATH</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="ghats.php"><span>GHAT</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="ghats.php">SARYU GHAT</a></li>
                  <li><a href="ghats.php">GUPTARGHAT</a></li>
                  <li><a href="ghats.php">RAM KI PAIDI</a></li>
                  <li><a href="ghats.php">SURYA KUND</a></li>
                  <li><a href="ghats.php">DANTDHAWAN KUND</a></li>
                  <li><a href="ghats.php">BHARAT KUND</a></li>
                </ul>
              </li>
              <li><a href="garden.php">GARDEN</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>SERVICES</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li class="dropdown"><a href="hotels.php"><span>HOTELS</span> </a>
              </li>
              <li><a href="restaurants.php">RESTAURATS</a></li>
              <li><a href="foods.php">BUDGET FRIENDLY FOOD</a></li>
              <li><a href="mall.php">MALL OF AVADH</a></li>
            </ul>
          </li>
          <li><a href="team.php">TEAM</a></li>
          <li><a href="gallery.php">GALLERY</a></li>
          <li><a href="contact_php.php">CONTACT</a></li>
          <li><a  class="btn" style="background-color:#DDC5BC; text-color:white; padding:10px;  font-family: 'Kaushan Script', cursive;" href="feedback_php.php">Feedback</a></li>
        </ul>
      </nav><!-- .navbar -->
      </div>
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container" >
	
      <div class="row  gy-5" >
          <h2 data-aos="fade-up" class="fw-bold" style="
		  font-family: 'Kaushan Script', cursive; color:white; text-align:center; font-size:70px;">Welcome to Mall of AVADH</h2>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">

          <a data-aos="fade-up" style=" opacity:0.9; font-size:120px; margin-left:-0px; margin-top:120px margin-right:-10;"href="video\mall.mp4" class="glightbox  btn-watch-video d-flex align-items-center top-70 end-100"><i class="bi bi-play-circle fs-2" style="color:red;"></i><span class="fst-italic fs-1 text-left" style="color:white; font-family: 'Berkshire Swash', cursive; opacity:0.9; ">Watch Video</span></a>
          <a href="#about" class=" btn btn-light btn-Visit Area fw-bolder fs-3 position-absolute d-flex end-0 translate-middle-x justify-content-center"style="color:maroon;font-family: 'Kaushan Script', cursive; margin-right:80px;">Visit Area</a>
			</div>
            
      </div>
    </div>
	</section>
	
  <!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
         <div class="section-header">
          <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-1 fw-bold mt-5">About Mall of Avadh</h2><hr>
        </div>
           <div class="row gy-4 mt-3 ayodhya-map">
          <div class="col-lg-6 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
          <div class="mapouter"><div id="about" class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=550&amp;height=675&amp;hl=en&amp;q=mall of awadh Ayodhya&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">embed google map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:675px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:675px;}.gmap_iframe {height:675px!important;}</style></div>
            </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5 mt-auto">
              <p class="fst-italic">
                <b>Mall of Avadh</b> is a outlet mall located in Faizabad, Uttar Pradesh. The street address of this place is Q4MV+JQF, Naharbagh, Shakti Vihar Colony, Faizabad, Uttar Pradesh 224001, India. It is about 0.76 kilometers away from the Faizabad Junction railway station. Mall of Avadh is 7 days open between 09:00 AM to 09:00 PM.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i>Dhishoom Cinema </li>
                <li><i class="bi bi-check2-all"></i>26 Rooms Hotel</li>
                <li><i class="bi bi-check2-all"></i>Pantaloon</li>
                <li><i class="bi bi-check2-all"></i>Pizzahut</li>
                <li><i class="bi bi-check2-all"></i>Market 99</li>
                <li><i class="bi bi-check2-all"></i>Meena Bazar</li>
                <li><i class="bi bi-check2-all"></i>Sugar</li>
                <li><i class="bi bi-check2-all"></i>Faces</li>
                <li><i class="bi bi-check2-all"></i>Titan</li>
                <li><i class="bi bi-check2-all"></i>Cream Bell</li>
              </ul>
            </div>
          </div>
        </div>
       </div>
      </div>
    </section><!-- End About Section -->
<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">
	  <section id="about" class="about">
        <div class="section-header">
          <p data-aos="fade-up" data-aos-delay="100" class="fs-1 fst-italic fw-bold " style="color:#001C30; font-family: 'Berkshire Swash', cursive; opacity:0.9;">Mall Of<span> AVADH</span></p>
          <p   data-aos="fade-up" data-aos-delay="100" style="color:#263A29; opacity:0.9; font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bolder">{Avadh Classio}</p><hr>
        </div>
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mall/c.jpeg" class="img" height="250px" width="420px" alt="">
              </div>
              <div class="member-info">
                <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Dhishoom Cinema</h3>
                
                <p>A two-screen multiplex of <b>Dhishoom Cinemas</b> will open in Ayodhya city. Located in Mall of Avadh in Shakti Vihar Colony, Naharbagh, it has two screens. The first auditorium has 154 seats while the second has 158 seats.The multiplex is DCI- and 3D-enabled.</p>
                <a class="btn btn-danger" style="background-color:#5c2831;" href="https://in.bookmyshow.com/buytickets/dhishoom-cinemas-ayodhya/cinema-ayod-DOMY-MT/20230929" alt="aaa">Book Tickets</a>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mall/pa.jpg" height="250px" class="img" alt="">
                
              </div>
              <div class="member-info">
               
               <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Pantaloons</h3>
                <p>Pantaloon is a fashion outlet that offers a wide range of clothing and accessories for men, women and children. It offers a variety of styles and designs to suit all tastes and budgets. Pantaloon provides customers with quality products at competitive prices.Pantaloon is the perfect place to find the latest fashion trends and styles. </p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mall/p.jpg" class="img" height="250px" width="500px" alt="">
                
              </div>
              <div class="member-info">
              <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Pizza Hut</h3>
                <p><b>Pizza Hut</b> delivers an unparalleled combination of taste and quality. Pizza Hut guarantees an unforgettable dining or delivery experience for pizza enthusiasts of all ages. Beyond pizzas, they also serve appetizing sides, pasta dishes, salads, and desserts. </p>
                <a class="btn btn-danger" style="background-color:#5c2831;" href="https://restaurants.pizzahut.co.in/pizza-hut-ph-mall-of-avadh-ayodhya-pizzerias-naharbagh-faizabad-275645/Home" alt="aaa">Order your Pizza</a>
              </div>
            </div>
          </div><!-- End Chefs Member -->
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mall/market 99.jpg" class="img" height="250px" alt="">
                
              </div>
              <div class="member-info">
              <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Market 99</h3>
              <h5>Coming Soon</h5>
                <p>Market99 proudly presents an array of different products at incomparable low-cost prices. Its loyal customer base knows Market99 as the home of the most affordable, trendy, and latest products. </p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mall/meena b.webp" class="img" height="250px" width="420px"alt="">
                
              </div>
              <div class="member-info">
              <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive; color:darkred;">Meena Bazar</h3>
              <h4 class="p-5">COMING SOON</h4>

              </div>
            </div>
          </div><!-- End Chefs Member -->
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mall/sugar.webp" class="img" height="250px" width="420px"alt="">
                
              </div>
              <div class="member-info">
              <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Sugar</h3>
              <h5>Coming Soon</h5>
                <p>SUGAR Cosmetics - Makeup & Skin Care (Mall of Avadh, Ayodhya) is a cosmetics store located in Ayodhya.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mall/f.jpg" class="img" height="250px" width="420px" alt="">
              </div>
              <div class="member-info">
              <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Faces</h3>
                <h4>COMING SOON</h4>
              </div>
            </div>
          </div><!-- End Chefs Member -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mall/titan.webp" class="img" height="250px" width="420px" alt="">
                
              </div>
              <div class="member-info">
              <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Titan</h3>
              <p>Titan Company Limited is an Indian company that mainly manufactures luxury fashion accessories such as jewellery, watches and eyewear.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mall/cb.jpg" class="img" height="250px" width="400px"alt="">
                
              </div>
              <div class="member-info">
              <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Cream Bell</h3>
              <h4>COMING SOON</h4>
              </div>
            </div>
          </div><!-- End Chefs Member -->
        </div>

      </div>
    </section><!-- End Chefs Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              ....Ayodhya.... <br>
              224001
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +91 ----------<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <!---<div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>--->

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>XYZ</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Our Team</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>