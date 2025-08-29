
<?php
$db = mysqli_connect('localhost','root', '','contact');
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
<button class="btn btn-danger"><a href="feedback_php.php">Go Back</a></button>
<h1 class="bg-secondary text-white text-center">Feedback Report</h1>
<table  class="table table  table-striped  table-hover rounded " >
								<tr class="bg-primary text-white" align="center">
									<th>s_no</th>
									<th>Full Name</th>
									<th>Email ID</th>
									<th>Phone No.</th>
									<th>Date</th>
									<th>Review</th>
									<th>Fav. Hotel</th>
									<th>Feedback</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
									<?php
										$sql = 'select * from feedback_form';
										$result = execute_query($db, $sql);
										$i=1;
										while($row = mysqli_fetch_assoc($result)){
											echo '<tr align="center">
											<td>'.$i++.'</td>
											<td>'.$row['f_name'].'</td>
											<td>'.$row['email'].'</td>
											<td>'.$row['phone'].'</td>
											<td>'.$row['date'].'</td>
											<td>'.$row['help'].'</td>
											<td>'.$row['hotel'].'</td>
											<td>'.$row['feedback'].'</td>
											<td><a href="feedback_php.php?edit='.$row['sno'].'" onClick="return confirm(\'Are you sure? \');" <h3 style="color: #3066ec;"> Edit</h3></a></td>
											<td><a href="report.php?del='.$row['sno'].'" onClick="return confirm(\'Are you sure? \');" <h3 style="color:red;"></h3>Delete</a></td>
												</tr>'	;
										}
									?>
							</table>
    </body>
</html>


</body>

</html>