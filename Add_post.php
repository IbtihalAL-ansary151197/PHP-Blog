<?php
session_start(); 

// echo $_SESSION['id'];


include 'db.php';


echo "<br>";

if(isset($_POST['add_post'])){

	$title    = $_POST['title'];
	$Description = $_POST['Description'];
	$User_id = $_SESSION['id'];

$query ="insert into posts(title,Description,User_id) values('$title','$Description','$User_id')";

if(mysqli_query($con, $query)){
	echo "Account successfully created";
	echo "<script> location.replace('MyBlog.php')</script>";

}else{
    // echo "<script> location.replace('register.php')</script>";
	echo " error  : " . mysqli_error($con);


}

}

?>

<!DOCTYPE html>
<html lang="en">


<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
	
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
			
				<form action="<?php $_PHP_SELF?>" method="post" class="contact-bx ">
					<div class="row placeani">
						<br><br><br>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label> Title</label>
									<input name="title" type="text" required="" class="form-control">
								</div>
							</div>
						</div>

						<div class="col-lg-12 width=50p">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your the Description </label>
									<input name="Description" type="text" class="form-control" required="">
								</div>
							</div>
						</div>
						
					
						<div class="col-lg-12 m-b30">
							<button name="add_post" type="submit" href="MyBlog.php" class="btn button-md"> Add Post</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>

<!-- //////////////////////////////////// -->


'