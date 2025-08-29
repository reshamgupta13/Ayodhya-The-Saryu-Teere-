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
					where sno ='.$_POST['edit'];
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
	$sql = 'select * from form where sno = '.$_GET['edit'];
	$qry = execute_query($db, $sql);
	$res = mysqli_fetch_assoc($qry);
}

?>
<?php
	if(isset($_POST['name'])){
		if(isset($_POST['edit']) && $_POST['edit'] != ''){
			$sql = 'update contact_form set 
					name="'.$_POST['name'].'",
					email="'.$_POST['email'].'",
					subject="'.$_POST['subject'].'",
					message="'.$_POST['message'].'"
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
			$sql = 'insert into contact_form (name,email,subject,message) values("'.$_POST['name'].'","'.$_POST['email'].'","'.$_POST['subject'].'","'.$_POST['message'].'")';

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
		$sql = 'delete from contact_form where sno="'.$_GET['del'].'"';
		execute_query($db, $sql);
		if(mysqli_error($db)){
			$msg .= '<h3 style="color:red;">Error in deleting . '.mysqli_error($db).' >> '.$sql.'</h3>';
		}
		else{
			$msg .= '<h3 style="color:red;">Deleted</h3>';
		}
	}
	if(isset($_GET['edit'])){
	$sql = 'select * from contact_form where sno = '.$_GET['edit'];
	$qry = execute_query($db, $sql);
	$res = mysqli_fetch_assoc($qry);
}

?>
<?php
	if(isset($_POST['user_name'])){
		if(isset($_POST['edit']) && $_POST['edit'] != ''){
			$sql = 'update registration_form set 
					user_name="'.$_POST['user_name'].'",
					email="'.$_POST['email'].'",
					password="'.$_POST['password'].'",
					confirm_password="'.$_POST['confirm_password'].'"
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
			$sql = 'insert into registration_form (user_name,email,password,confirm_password) values("'.$_POST['user_name'].'","'.$_POST['email'].'","'.$_POST['password'].'","'.$_POST['confirm_password'].'")';

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
		$sql = 'delete from registration_form where sno="'.$_GET['del'].'"';
		execute_query($db, $sql);
		if(mysqli_error($db)){
			$msg .= '<h3 style="color:red;">Error in deleting . '.mysqli_error($db).' >> '.$sql.'</h3>';
		}
		else{
			$msg .= '<h3 style="color:red;">Deleted</h3>';
		}
	}
	

	if(isset($_GET['edit'])){
	$sql = 'select * from registration_form where sno = '.$_GET['edit'];
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  .hide{
	  display:none;
  }
  .show{
	display:block;
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
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
  <img style="position:absolute;top:0px;"src="img/ram ji.png" class="img-fluid" alt="...">
    <div class="container" >
	
      <div class="row justify-content-between gy-5" >
          <h2 data-aos="fade-up" class="fw-bold" style="position:absolute;top:100px;
		  font-family: 'Kaushan Script', cursive; color:black; font-size:70px;">Explore Your Ayodhya Tour<br></h2>
          <p data-aos="fade-up" data-aos-delay="100" class="fs-3 fst-italic text-start fw-bold" style="color:darkred; font-family: 'Berkshire Swash', cursive; opacity:0.9; margin-top:50px;">"Ayodhya is not just a place; it's a symbol of our <span class="fs-1">culture</span> and <span class="fs-1">heritage</span>." </p>
			
          <div class="row mt-1 content" data-aos="fade-left">
           <h3 style="color:black; text-size:120px;"><marquee class="row fw-bold" behavior="scroll" scrollamount="8" direction="left">"अयोध्या वो धरोहर है, जिसकी महिमा और महत्व को कोई शब्दों में नहीं बयां कर सकता।"</marquee></h3>
			</div></br>
      </div>
			<div class="col-md-12">
            <a data-aos="fade-up" style=" opacity:0.9; font-size:100px; margin-left:-0px; margin-top:120px margin-right:-10;"href="video\front1.mp4" class="glightbox  btn-watch-video d-flex align-items-center top-70 end-100"><i class="bi bi-play-circle"></i><span class="fst-italic fs-2 text-left" style="color:black; font-family: 'Berkshire Swash', cursive; opacity:0.9; ">Watch Video</span></a>
			</div>
    </div>
	</section>
	
  <!-- End Hero Section -->
  

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
      <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-1 fw-bold mt-5">About</h2><hr>
      <p   style="color:#263A29; opacity:0.9; font-family: 'Kaushan Script', cursive;" class="fs-1 fw-bolder">Know About <span>AYODHYA </span></p>
      </div>
      <div class="row gy-4">
       <div class="col-lg-6 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
          
          <img src="assets/img/ram lala 2.jpg" class="img mt-4" height="725px" width="600px">
            <div class="call-us position-absolute">
              <h4 style="color:darkred;">रघुपति राघव राजाराम, पतित पावन सीताराम।<br>
                                   सीतामान भवभय दायक, देहु अबय वरदायक सीताराम।।</h4>
            </div>
         </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
             <h5 class="fst-italic fw-bold" style="color:darkred;">
                                     गंगा बड़ी गोदावरी , तीरथ बड़ा प्रयाग ,<br>सबसे बड़ी अयोध्या नगरी जहां राम लिए अवतार ||
              </h5>
              <ul>
                <li><i class="bi bi-check2-all"></i> "In the heart of Ayodhya, the legend of Lord Rama lives on, reminding us of the power of faith and righteousness."</li>
                <li> <i class="bi bi-check2-all"></i>Ayodhya, where every stone speaks of the timeless tale of Lord Rama's love, courage, and sacrifice."</li>
                <li><i class="bi bi-check2-all"></i> "Ayodhya is a symbol of unity in diversity, where people from all walks of life come together to celebrate their shared heritage."</li>
              </ul>
              <p>
                "Ayodhya is not just a city; it's a testament to the enduring power of belief and devotion."<br>
                "Just as Lord Rama's life in Ayodhya was a journey of dharma (duty), Ayodhya continues to inspire us to uphold righteousness in our own lives."
              </p>
              <div class="position-relative mt-4">
                <img src="assets/img/Ayodhya11.jpg" class="img-fluid" alt="">
                <a href="video/front.mp4" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">
         <div class="section-header">
          <h2 style="color:white; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-1 fw-bold">Ayodhya Deepotsav World Record</h2><hr>
        </div>
         
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <h1 style="color:white; font-family: 'Kaushan Script',cusive;"><b>6.06 Lakh</b></h1>
              <p class="fs-1 "style="color:lightblue;">2020</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <h1 style="color:white; font-family: 'Kaushan Script',cusive;"><b>9.41 Lakh</b></h1>
              <p class="fs-1 "style="color:lightblue;">2021</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <h1 style="color:white; font-family: 'Kaushan Script',cusive;"><b>15.76 Lakh</b></h1>
              <p class="fs-1 "style="color:lightblue;">2022</p>
             
            </div>
          </div><!-- End Stats Item -->
          <div class="col-lg-3 col-md-6">   
            <div class="stats-item text-center w-100 h-100">
              <h1 style="color:white; font-family: 'Kaushan Script',cusive;"><b>22 Lakh</b></h1>
              <p class="fs-1 "style="color:lightblue;">2023</p>
              <p>Guinness Book of World Record for the <b>'largest display of oil lamps'</b></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="d-flex mb-5" data-aos="fade-up" data-aos-delay="200">
          <a href="video\D1.mp4"  style=" opacity:0.9; font-size:50px; color:red;" class="glightbox  btn-watch-video fs-1 position-absolute start-50 translate-middle-x justify-content-center"><i class="bi bi-play-circle"></i><span class="fst-italic fs-1" style="color:white; font-family: 'Berkshire Swash', cursive; opacity:0.9; text-align:center;">Watch Video</span></a>
			</div>
        </div>
      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">Ayodhya Things</h2><hr>
          <p   style="color:#263A29; opacity:0.9; font-family: 'Kaushan Script', cursive;" class="fs-3 fw-bolder">Budget Friendly Things You Buy In <span>AYODHYA </span></p>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="row gy-5">

              <div class="col-lg-4 menu-item" data-aos="fade-up" data-aos-delay="300">
                <a href="assets/img/3D model.png" class="glightbox"><img src="assets/img/3D model.png" class="menu-img img-fluid" alt=""></a>
                <h4 style="font-size:25px; font-weight:bold;">Ram Mandir 3D Model</h4>
                <p class="ingredients">
                Made of Wood
                </p>
                <p class="price">
                  1500rs.
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" data-aos="fade-up" data-aos-delay="300">
                <a href="assets/img/tulsi mala.png" class="glightbox"><img src="assets/img/tulsi mala.png" height="225px" width="400px" class="menu-img mt-4" alt=""></a>
                <h4  style=" font-size:25px; font-weight:bold;">Tulsi Mala</h4>
                <p class="ingredients">
                  Made of Tulsi 
                </p>
                <p class="price">
                  100rs.
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" data-aos="fade-up" data-aos-delay="300">
                <a href="assets/img/rudraksh.png" class="glightbox"><img src="assets/img/rudraksh.png" height="210px" width="350px" class="menu-img mt-3" alt=""></a>
                <h4  style="font-size:25px; font-weight:bold;">Rudraksh</h4>
                <p class="ingredients">
                  Original Rudraksh
                </p>
                <p class="price">
                  50rs.
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" data-aos="fade-up" data-aos-delay="300">
                <a href="assets/img/Chandan.png" class="glightbox"><img src="assets/img/Chandan.png" height="250px" width="350px" class="menu-img mt-2" alt=""></a>
                <h4  style="font-size:25px; font-weight:bold;">Chandan</h4>
                <p class="ingredients">
                  Pure Sandal Wood
                </p>
                <p class="price">
                 80rs.
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" data-aos="fade-up" data-aos-delay="300">
                <a href="assets/img/2D model.png" class="glightbox"><img src="assets/img/2D model.png" class="menu-img mt-4" height="225px" width="375px" alt=""></a>
                <h4 style="font-size:25px; font-weight:bold;">Ram Mandir 2D Model</h4>
                <p class="ingredients">
                Made of Wood
                </p>
                <p class="price">
                  800rs.
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" data-aos="fade-up" data-aos-delay="300">
                <a href="assets/img/Shankh.png" class="glightbox"><img src="assets/img/Shankh.png" class="menu-img img-fluid" alt=""></a>
                <h4  style= "font-size:25px; font-weight:bold;">Shankh</h4>
                <p class="ingredients">
                 Original
                </p>
                <p class="price">
                  500rs.
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->
        </div>
     </section>   
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">
         <div class="section-header">
          <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">Events & Festivals</h2><hr>
          <p   style="color:#263A29; opacity:0.9; font-family: 'Kaushan Script', cursive;" class="fs-3 fw-bolder">Events & Festivals in <span>Ayodhya</span></p>
        </div>
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/Ramnavmi.jpg)">
            <h3 class="fs-1">Ramnavmi</h3>
     
              <p class="description">
              Ramnavmi is the most important festival to be celebrated in the city which is associated with the birth anniversary of Lord Rama.Ayodhya plays host to the Ram Navmi festival in the month of April. Thousands of worshippers gather to venerate the Lord at Kanak Bhawan.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/e.jpg)">
            <h3 class="fs-1">Deepostav</h3>
              <div class="price align-self-start"></div>
              <p class="description">
              The Ayodhya Deepotsav is probably the grandest celebration one will witness not just in the city but in the whole country.The Saryu bank witnesses a grand aarti and is illuminated with colorful lightning and lakhs of diyas. The previous year festival saw 15.76 Lakh earthen lamps lit at Ram ki Pairi, a Guinness Book World Record.
              </p>
              
            </div><!-- End Event item -->
            
            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/kk.jpg)">
              <h3 class="fs-1"> Parikrama Fair,</h3>
          
              <p class="description">
              Ayodhya is one of the most noted place in the northern India where parikramas are undertaken by Pilgrims. There is the `Panchkoshi Parikrama’ circuit of 10 miles.The 14 Kosi Parikrama taking place in the month of Kartik is also known as Kartik Parikrama.
              </p>
            </div><!-- End Event item -->
           

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/Savanjhula.jpg)">
              <h3 class="fs-1">Shravan Jhula Mela</h3>
          
              <p class="description">
                Shravan Jhula Mela is another famous festival held in the month of Shravan. During the festival, the idols of Ram and Sita are taken to a swing along with hoards of devotees accompanying it.
              </p>
            </div><!-- End Event item -->
            
            
            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/Snan.png)">
              <h3 class="fs-1">Saryu Snan</h3>
          
              <p class="description">
                Saryu Snan is an important event celebrated in Ayodhya. It is held in the month of October-November³. During this event, devotees take a dip in the holy river Saryu. It is one of the many important fairs and festivals celebrated in Ayodhya.

             </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->
 
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

         <div class="section-header">
          <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">TEAM</h2><hr>
          <p   style="color:#263A29; opacity:0.9; font-family: 'Kaushan Script', cursive;" class="fs-3 fw-bolder">Our <span>Team</span></p>
        </div>

<div class="row col-md-12">
        <div class="row gy-4">

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/kamini.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
         
          <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">Kamini Pandey</h2>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/madhu2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                 <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">Madhu Pandey</h2>
          
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/Reshamm.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">Resham Gupta</h2>
          
              </div>
            </div>
          </div><!-- End Chefs Member -->
                    <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/disha.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">Disha Jaiswal</h2>
          
              </div>
            </div>
          </div><!-- End Chefs Member -->
       </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->
    

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
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">GALLERY</h2><hr>
          <p   style="color:#263A29; opacity:0.9; font-family: 'Kaushan Script', cursive;" class="fs-3 fw-bolder">Check Ayodhya <span>Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/Ram Mandir/8.jpg"><img src="assets/img/Ram Mandir/8.jpg" height="250px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/Ram Mandir/14.jpg"><img src="assets/img/Ram Mandir/14.jpg" height="250px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/Ram Mandir/16.jpg"><img src="assets/img/Ram Mandir/16.jpg" height="250px" width="220px"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/ramlala2.jpg"><img src="assets/img/gallery/ramlala2.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/shri ram.jpg"><img src="assets/img/gallery/Shri ram.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/hanuman ji.jpg"><img src="assets/img/gallery/hanuman ji.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Hanuman Gadhi.jpg"><img src="assets/img/gallery/Hanuman Gadhi.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/saryuma.jpg"><img src="assets/img/gallery/saryuma.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/aarti.jpg"><img src="assets/img/gallery/aarti.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/Ram Mandir/s.jpg"><img src="assets/img/Ram Mandir/s.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/f.jpg"><img src="assets/img/gallery/f.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/Ram Mandir/c.jpg"><img src="assets/img/Ram Mandir/c.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/aa.jpg"><img src="assets/img/gallery/aa.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/00.jpg"><img src="assets/img/gallery/00.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/latamangeshkr3.jpg"><img src="assets/img/gallery/latamangeshkr3.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Ayodhya1.jpg"><img src="assets/img/gallery/Ayodhya1.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/ram.jpg"><img src="assets/img/gallery/ram.jpg" height="250px" width="220px" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/Ram Mandir/7.jpg"><img src="assets/img/Ram Mandir/7.jpg" height="250px" width="220px" alt=""></a></div>
            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->



<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="color:#001C30; opacity:0.9;font-family: 'Kaushan Script', cursive;" class="fs-2 fw-bold">CONTACT</h2><hr>
          <p   style="color:#263A29; opacity:0.9; font-family: 'Kaushan Script', cursive;" class="fs-3 fw-bolder">Need Help? <span>Contact Us</span></p>
        </div>
        <div class="mb-3">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Ayodhya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/124/"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;}</style><a href="https://www.embedgooglemap.net">embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1072px;}</style></div></div>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>...Ayodhya.....</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+91..........</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <!--<div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>-->
          </div><!-- End Info Item -->

        </div>
        <form action="index.php" method="POST" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
        </form><!--End Contact Form -->
      </div>
    </section><!-- End Contact Section -->
 
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
              ....Ayodhya.... <br>
              224001
              <button class="btn btn-dark m-0 p-0"><a href="contact_report.php">.</a></button>
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