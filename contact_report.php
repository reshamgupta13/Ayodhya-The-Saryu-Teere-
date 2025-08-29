
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
	$sql = 'select * from form where sno = '.$_GET['edit'];
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
<button class="btn btn-danger m-0 p-0"><a href="contact_php.php">Go Back</a></button>
<h1 class="bg-secondary text-white text-center">Contact Report</h1>
<table  class="table table  table-striped  table-hover rounded " >
								<tr class="bg-primary text-white " align="center">
									<th>Sno</th>
									<th>Name</th>
									<th>Email</th>
									<th>Subject</th>
									<th>Message</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
									<?php
										$sql = 'select * from contact_form';
										$result = execute_query($db, $sql);
										$i=1;
										while($row = mysqli_fetch_assoc($result)){
											echo '<tr align="center">
											<td>'.$i++.'</td>
											<td>'.$row['name'].'</td>
											<td>'.$row['email'].'</td>
											<td>'.$row['subject'].'</td>
											<td>'.$row['message'].'</td>
											<td><a href="contact_report.php?edit='.$row['sno'].'" onClick="return confirm(\'Are you sure? \');" <h3 style="color: #3066ec;"> Edit</h3></a></td>
											<td><a href="contact_report.php?del='.$row['sno'].'" onClick="return confirm(\'Are you sure? \');" <h3 style="color:red;"></h3>Delete</a></td>
												</tr>'	;
										}
									?>
							</table>
    </body>
</html>


</body>

</html>