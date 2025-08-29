<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resturant</title>
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
  background-image: url("assets/img/r.jpg");
  height:97vh;
  }
  #hero:before{
  content: "";
  background: rgba(0, 0, 0, 0.2);
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
      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="assets/img/R.png" width="70px" alt=""> 
         <h1 style="font-size:65px; color:Red; font-family: 'Kaushan Script', cursive; font-weight:bold;">R</h1><span class="fs-3 "></span><span style="font-family: 'Kaushan Script',cursive; font-size:40px; font-weight:bold;">esturants</span><br><p class="d-flex align-items-end"> <sub  class="mt-5 fw-bold" style="font-family: 'Kaushan Script',cusive; font-size:18px; color:red;">The Saryu Teere</sub></p>
      </a>
</div>
<div class="row col-md-7">
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

    <div class="row justify-content-between gy-5" >
        <h2 data-aos="fade-up" class="fw-bold " style="position:absolute;top:100px;
    font-family: 'Kaushan Script', cursive; color:black;">Eat and Repeat</h2>
        <p data-aos="fade-up" data-aos-delay="100" class="fs-2 fst-italic fw-bold text-start" style="color:black; font-family: 'Berkshire Swash', cursive; opacity:0.9;">Restaurants in Ayodhya is a fantasy,it will give you an eating experience that you'll never forget.</p>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
    <div>
    </div>
    </div>
  </div>


</section>

<!-- End Hero Section -->
  <main id="main">

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">
	  <section id="about" class="about">
        <div class="section-header">
          <p data-aos="fade-up" data-aos-delay="100" class="fs-7 fst-italic fw-bold " style="color:#352F44; font-family: 'Berkshire Swash', cursive; opacity:0.9;">Restaurant<span> of Ayodhya</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/m33.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">M3 Cafe</h3>
                
                <p>Immerse yourself in wonderful Chinese and Indian cuisines here. It's a must to try good coffee while coming to this restaurant. A lot of guests have noticed that the staff is nice at this place. Prompt service is something that people note in their comments. You can pay your attention to the exotic atmosphere. 4.6 is what M3 Cafe & Restaurant got from the Google rating system.</p>
				<a class="btn btn-danger" style="background-color:#5c2831;" href="https://www.facebook.com/M3CafeandRestaurant/" alt="aaa">Book a Table...</a>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/mak.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
<h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Makhan-Malai</h3>
               
                <p>Good vegetarian restaurant in budget near Naya Ghat. They serve breakfast, lunch and dinner. Service and cleanliness was good. This restaurant is the part of The Ramprastha Hotel.A very famous restaurant. The taste was amazing, a lot of rush but worth it. A very clean place
				</p>
				<a class="btn btn-danger" style="background-color:#5c2831;" href="https://www.justdial.com/Ayodhya/Makan-Malai-Restaurant-Near-Ramji-Ghat-Hault-Railway-Station-Ayodhya-Ho/9999P5278-5278-130718122350-T5Z7_BZDET" alt="aaa">Book a Table...</a>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chilli.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Evergreen</h3>
                <p>Evergrenn Restaurant is an excellent choice when it comes to picking a restaurant that provides home delivery services.you can now easily order your favourite foods from the comfort of your home.</p>
				<a class="btn btn-danger" style="background-color:#5c2831;" href="https://www.justdial.com/Ayodhya/Evergreen-Restaurant-Near-Pushparaj-Chauraha-Civil-Line/9999PX527-X527-180202125715-L5K6_BZDET" alt="aaa">Book a Table...</a>
              </div>
            </div>
          </div><!-- End Chefs Member -->
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/paragg.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
<h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Parag</h3>
                <p> Discover the Indian menu at this restaurant. You can always degust perfectly cooked paneer at New Parag Restaurant & Dairy.  If you want to experience prompt service, you should visit this place.</p>
				<a class="btn btn-danger" style="background-color:#5c2831;" href="https://restaurant-guru.in/Parag-Dairy-and-Restaurant-Ayodhya" alt="aaa">Book a Table...</a>
              </div>
            </div>
          </div><!-- End Chefs Member -->
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/aura3.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Aura</h3>
                <p>Vegetarian cuisine is offered at this restaurant. The attentive staff meets you at The Aura Restaurant all year round. Cool service is something that visitors note in their reviews. The lovely decor and comfortable atmosphere let guests feel relaxed here..</p>
				<a class="btn btn-danger" style="background-color:#5c2831;" href="https://restaurant-guru.in/The-Aura-Restaurant-Faizabad" alt="aaa">Book a Table...</a>

              </div>
            </div>
          </div><!-- End Chefs Member -->
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/3.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
<h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Ghar Jaisa 3.0</h3>
             
                <p>If you prefer Vegetarian cuisine, then this restaurant is worth visiting. At Ghar Jaisa 3.0 Pure Veg Restaurant Ayodhya, the recipe of perfectly cooked paneer is a story that ends up with a really good meal.</p>
				<a class="btn btn-danger" style="background-color:#5c2831;" href="https://restaurant-guru.in/Ghar-Jaisa-30-Faizabad" alt="aaa">Book a Table...</a>
              </div>
            </div>
          </div><!-- End Chefs Member -->
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/u.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
<h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Urban Chilli</h3>
                <p>Urban Chilli is a F&B-Casual Dining outlet that offers a unique dining experience. It serves a variety of delicious dishes from around the world, including Indian, Chinese, Mexican, and Italian cuisines. The restaurant has a relaxed and inviting atmosphere, with comfortable seating and a friendly staff.</p>
				<a class="btn btn-danger" style="background-color:#5c2831;" href="https://magicpin.in/Ayodhya/Rikabganj/Restaurant/Urban-Chilli/store/34606b/" alt="aaa">Book a Table...</a>
              </div>
            </div>
          </div><!-- End Chefs Member -->
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/cafee.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
<h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Cafe Bollyfood</h3>
                <p>“Our café serves an authentic range of mouth-watering and lip-smacking starters, shakes, soups, refreshments, varieties of coffee and tea, main course, desserts and beverages. And while we serve the varieties, we also ensure everything here is strictly vegetarian.</p>
				<a class="btn btn-danger" style="background-color:#5c2831;" href="https://nowayodhya.com/cafe-bollyfood-serving-your-favourite-dishes-with-a-filmy-flavour-in-ayodhya/" alt="aaa">Book a Table...</a>

              </div>
            </div>
          </div><!-- End Chefs Member -->
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/5.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                  <h3 class="fw-bold" style="font-family: 'Kaushan Script', cursive;; color:darkred;">Ghar Jaisa 2.0</h3>
             <p>This restaurant should be recommended for nicely cooked biryani and good kulcha. Drink the delicious tea offered here. Based on the visitors' opinions, the staff can be downscale. The spectacular service is a great benefit of Ghar Jaisa 2.0 Pure Veg.</p>
				<a class="btn btn-danger" style="background-color:#5c2831;" href="https://restaurant-guru.in/Ghar-Jaisa-20-Pure-Veg-Taste-of-Ayodhya-Best-Restaurant-Famous-restaurant-Faizabad" alt="aaa">Book a Table...</a>
              </div>
            </div>
          </div><!-- End Chefs Member -->
		</div>
		</div>
        
    </section><!-- End Chefs Section -->

   
   

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h1><strong><u>Gallery</u></strong></h2>
          <p data-aos="fade-up" class="fw-bold " style="color:#1A120B;
		  font-family: 'Kaushan Script', cursive;">Check Our Gallery</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/o.jpg"><img src="assets/img/gallery/0.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/1.jpg"><img src="assets/img/gallery/1.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/2.jpg"><img src="assets/img/gallery/2.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/3.jpg"><img src="assets/img/gallery/3.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/4.jpg"><img src="assets/img/gallery/4.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/5.jpg"><img src="assets/img/gallery/5.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/6.jpg"><img src="assets/img/gallery/6.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/7.jpg"><img src="assets/img/gallery/7.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/8.jpg"><img src="assets/img/gallery/8.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/9.jpg"><img src="assets/img/gallery/9.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/10.jpg"><img src="assets/img/gallery/10.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/11.jpg"><img src="assets/img/gallery/11.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/12.jpg"><img src="assets/img/gallery/12.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/13.jpg"><img src="assets/img/gallery/13.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/14.jpg"><img src="assets/img/gallery/14.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/15.jpg"><img src="assets/img/gallery/15.jpg" height="200px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/16.jpg"><img src="assets/img/gallery/16.jpg" height="200px" width="220px"></a></div>
            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Ayodhya <br>
              Uttar Pradesh-224133 INDIA<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

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
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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