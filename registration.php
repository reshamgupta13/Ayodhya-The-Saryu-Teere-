
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
    .background {
            position: absolute;
            height: 100%;
            width: 100%;
            background-size: cover;
            background-position: center;
            background-color: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(15px);
            z-index: -1;
        }
.popup{
      background-color:#DDC5BC;
      width: 50%; /* A4 width in centimeters */
      height: 60%;
    }    
 .popup .input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.popup .icon {
  padding: 10px;
  background:  #5c2831;
  color: white;
  min-width: 50px;
  text-align: center;
}

.popup .input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.popup  .input-field:focus {
  border: 2px solid  #5c2831;
}

/* Set a style for the submit button */
.popup .btn {
  background-color:  #5c2831;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.popup .btn:hover {
  opacity: 1;
}
  </style>
</head>

<body>
  <div class="background">
    <img src="assets/img/aa.jpg" width="100%" height="100vh">
</div>
<section class="hide popup-container" id="popup">
  <div class="popup">
    <div class="section-header">
    <h2 style="color:#5c2831; opacity:0.9;font-family: 'Kaushan Script', cursive; text-align:center; font-size:30px;" class=" fw-bold">Registration</h2>
    </div>
      <form action="registration.php" method="POST" style="max-width:500px;margin:auto">
        <div class="input-container">
          <i class="fa fa-user icon"></i>
          <input class="input-field" type="text" placeholder="Username" name="u_name" >
        </div>

        <div class="input-container">
          <i class="fa fa-envelope icon"></i>
          <input class="input-field" type="text" placeholder="Email" name="email">
        </div>
        
        <div class="input-container">
          <i class="fa fa-key icon"></i>
          <input class="input-field" type="password" placeholder="Password" name="password" >
        </div>
        <div class="input-container">
          <i class="fa fa-key icon"></i>
          <input class="input-field" type="confirm_password" placeholder="Confirm_Password" name="confirm_password" >
        </div>
        <button type="submit" class="btn">Register</button>
        
        <span class="close-button" id="closePopupButton">&times;</span>
      </form>
    </div>
</section>
<script>
  <?php
  if(!isset($_POST['confirm_password'])){
  ?>
		const sec=document.querySelector('.popup-container');
		setTimeout(function(){
			console.log("hello");
			sec.classList.remove('hide');
		},5000);
        // JavaScript to show and hide the popup
        const closePopupButton = document.getElementById("closePopupButton");
        const popup = document.getElementById("popup");
        closePopupButton.addEventListener("click", () => {
            popup.style.display = "none";
        });
  <?php } ?>
    </script>
</body>

</html>