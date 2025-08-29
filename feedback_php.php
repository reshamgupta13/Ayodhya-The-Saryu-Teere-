<?php
$db = mysqli_connect('localhost','root', '','minor');
if (!$db) {
    die('Could not connect: ' . mysqli_error());
}
else{
$msg_db = '';
}
function execute_query($db,$sql){
	return mysqli_query($db,$sql);
}

?>

<?php
	if(isset($_POST['f_name'])){
		if(isset($_POST['edit']) && $_POST['edit'] != ''){
			$sql = 'update feedback_form set 
					f_name="'.$_POST['f_name'].'",
					email="'.$_POST['email'].'",
					phone="'.$_POST['phone'].'",
					date="'.$_POST['date'].'",
					help="'.$_POST['help'].'",
					hotel="'.$_POST['hotel'].'",
					feedback="'.$_POST['feedback'].'"
					where sno = '.$_POST['edit'];
			//echo $sql;
			execute_query($db, $sql);
			if(mysqli_errno($db)){
				echo "Updation failed".mysqli_errno($db).mysqli_error($db);
			}
			else{
				echo "Successfully updated";
			}
		}
		else{
			$sql = 'insert into feedback_form (f_name,email,phone,date,help,hotel,feedback) values("'.$_POST['f_name'].'","'.$_POST['email'].'","'.$_POST['phone'].'","'.$_POST['date'].'","'.$_POST['help'].'","'.$_POST['hotel'].'","'.$_POST['feedback'].'")';

			//echo $sql;
			execute_query($db,$sql);
			if(mysqli_errno($db)){
				echo "Insertion failed".mysqli_errno($db).mysqli_error($db);
			}
			else{
				 echo "Data inserted ";
			}
		}
	}
    
	$msg="";
		
	if(isset($_GET['del'])){
		$sql = 'delete from feedback_form where sno="'.$_GET['del'].'"';
		execute_query($db, $sql);
		if(mysqli_error($db)){
			$msg .= '<h3 style="color:red;">Error in deleting . '.mysqli_error($db).' >> '.$sql.'</h3>';
		}
		else{
			$msg .= '<h3 style="color:red;">Deleted</h3>';
		}
	}
	

	if(isset($_GET['edit'])){
	$sql = 'select * from feedback_form where sno = '.$_GET['edit'];
	$qry = execute_query($db, $sql);
	$res = mysqli_fetch_assoc($qry);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ayodhya</title>
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
  .hero{
  background-image: url("img\bg_2.webp");
  height:100vh;
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
         <img src="assets/img/logo..png" width="70px" alt=""> 
         <h1 style="font-size:65px; color:Red; font-family: 'Kaushan Script', cursive; font-weight:bold;">A</h1><span class="fs-3 "></span><span style="font-family: 'Kaushan Script',cursive; font-size:40px; font-weight:bold;">yodhya</span><br><p class="d-flex align-items-end"> <sub  class="mt-5 fw-bold" style="font-family: 'Kaushan Script',cusive; font-size:18px; color:red;">The Saryu Teere</sub></p>
      </a>
</div>
<div class="row col-md-7">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li class="dropdown"><a href="#"><span>EXPLORE AYODHYA</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="Landmarks.php">LANDMARKS</a></li>
              <li class="dropdown"><a href="Temples.php"><span>TEMPLES</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="Temples.php">RAM JANAM BHOOMI</a></li>
                  <li><a href="Temples.php">KANAK BHAVAN</a></li>
                  <li><a href="Temples.php">HANUMAN GADHI</a></li>
                  <li><a href="Temples.php">DASHRATH MAHAL</a></li>
                  <li><a href="Temples.php">NAGESHVARNATH</a></li>
                  <li><a href="Temples.php">KHIRESHVARNATH</a></li>
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
              <li class="dropdown"><a href="hotels.php"><span>HOTELS</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="hotels.php">THE RAMAYANA</a></li>
                  <li><a href="hotels.php">DREAM LAND</a></li>
                  <li><a href="hotels.php">ROYAL HERITAGE</a></li>
                  <li><a href="hotels.php">SHAANE-E-AWADH</a></li>
                  <li><a href="hotels.php">KRISHNA PALACE</a></li>
                </ul>
              </li>
              <li><a href="restaurants.php">RESTAURATS</a></li>
              <li><a href="food.php">BUDGET FRIENDLY FOOD</a></li>
              <li><a href="mall.php">MALL OF AVADH</a></li>
            </ul>
          </li>
          <li><a href="team.php">TEAM</a></li>
          <li><a href="gallery.php">GALLERY</a></li>
          <li><a href="contact_php.php">CONTACT</a></li>
          <li><a href="feedback111.php" class="btn " style="background-color:#DDC5BC; text-color:white; padding:10px;  font-family: 'Kaushan Script', cursive;">Feedback</a></li>
        </ul>
      </nav><!-- .navbar -->
      </div>
    
      </div>
    </div>
  </header><!-- End Header -->
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

       <div class="section-header">
          <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">FEEDBACK</h2><hr>
          <p   style="color:#263A29; opacity:0.9; font-family: 'Kaushan Script', cursive;" class="fs-3 fw-bolder">Share Your <span>Experience Here</span></p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/feedback.jpeg" height="550px" width="420px">
          </div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="feedback_php.php" method="POST" >
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="f_name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo isset($_GET['edit'])?$res['f_name']:""?>">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" value="<?php echo isset($_GET['edit'])?$res['email']:""?>">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:10" data-msg="Please enter 10 numbers" value="<?php echo isset($_GET['edit'])?$res['phone']:""?>">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter date" value="<?php echo isset($_GET['edit'])?$res['date']:""?>">
                  <div class="validate"></div>
                </div>
                
                <!--<div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>-->
				<div>
					<label class="fs-5">Is this website helpful for you?</label><br>
					<input type="radio" name="help" value="Yes" ><label class="fs-5" value="<?php echo isset($_GET['edit'])?$res['help']:""?>">Yes</label><br>
					<input type="radio" name="help" data-rule="click one button" data-msg="Please select one"  value="No" value="<?php echo isset($_GET['edit'])?$res['help']:""?>"><label class="fs-5">No</label>
                  <div class="validate"></div>
                </div>
                <div>
					<label class="fs-5">Which hotel or restaurant of Ayodhya did you like?</label><br>
					<input type="text" class="form-control" name="hotel" id="Hotel/Restaurant" placeholder="Hotel/Restaurant" data-rule="minlen:4" data-msg="Please enter hotel/restaurant name" value="<?php echo isset($_GET['edit'])?$res['hotel']:""?>">
                </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="feedback" rows="4" placeholder="Feedback" value="<?php echo isset($_GET['edit'])?$res['feedback']:""?>"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button class="btn"type="submit" name="submit"  style="background-color:#5c2831; color:white;">Submit</button></div>
              <input type = "hidden" name = "edit" value="<?php echo isset($_GET['edit'])? $_GET['edit']: ""?>">
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->


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
              <button class="btn btn-dark m-0 p-0"><a href="report.php">.</a></button>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
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
        Designed by <a href="https://bootstrapmade.com/">Our team</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
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


</body>

</html>