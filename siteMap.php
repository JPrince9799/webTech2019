<?php

require('phpBackend/session.php');

?>







<!-- HTML CODE -->





<!DOCTYPE html>
<html>
<head>
	<title> Site Map </title>
	<link rel="stylesheet" type="text/css" href="css/siteMap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
	<link rel="stylesheet" href="bcss/bootstrap-grid.min.css"/>
	<link rel="stylesheet" href="bcss/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="bcss/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script src="bjs/bootstrap.bundle.min.js"></script>
	<script src="bjs/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script type="text/javascript" src="js\jquery.js"></script>
	<script type="text/javascript" src="js\index.js"></script>
	<script type="text/javascript" src="js\jquery-ui-1.12.1\jquery-ui-1.12.1\jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>

<br><br><br><br><br>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

		<!-- Footer Links -->
		<div class="container text-center text-md-left">
	  
		  <!-- Grid row -->
		  <div class="row">
	  
			<!-- Grid column -->
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

					<!-- Content -->
					<h6 class="text-uppercase font-weight-bold"> Bit Tours </h6>
					<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
					<p>Our company aims to provide all tourists with the best trip services that the African Continent
						has to offer. Also we aim to give up-to-date reviews on the popular sites in on the African Map
					</p>
			
				  </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

			<!-- Links -->
			<h6 class="text-uppercase font-weight-bold">Products</h6>
			<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			<p>
				Hotel Recommendation
			</p>
			<p>
				Restaurant Reviewing
			</p>
			<p>
				Tourist Reviews
			</p>
			<p>
				Advertising
			</p>
	
		  </div>
		  <!-- Grid column -->
	
		  <!-- Grid column -->
		  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
	
			<!-- Links -->
			<h6 class="text-uppercase font-weight-bold">Useful links</h6>
			<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			<p>
				<a href="index.php"> Home </a>
			</p>
			<p>
			  <a href="about.php"> About </a>
			</p>
			<p>
			  <a href="gallery.php"> Gallery </a>
			</p>
			<p>
				<a href="contact.php"> Contact Us </a>
			</p>
			<p>
			  <a href="TnC.php"> Terms and Condition </a>
			</p>

			<!-- if the session has not started -->
			<?php if(!isset($_SESSION['id'])): ?>
			<p>
				<a href="userLogin.php"> Login </a>
			</p>
			<?php endif?>
	
		  </div>
		  <!-- Grid column -->
	  
		<hr class="clearfix w-100 d-md-none">
	  
			<!-- Grid column -->
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
					
				<!-- Links -->
					
				<h6 class="text-uppercase font-weight-bold">Contact</h6>
					
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
					
				<p>
					  
					<i class="fas fa-home mr-3"></i> Accra, Acc 00233, GH</p>
					
				<p>
					  
					<i class="fas fa-envelope mr-3"></i> bitTours@gmail.com</p>
					
				<p>
					  
					<i class="fas fa-phone mr-3"></i> 0302 411 5112</p>
					
				<p>
					  
					<i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
			
				</div>
			
			 	<!-- Grid column -->
	  
		  </div>
		  <!-- Grid row -->
	  
		</div>
		<!-- Footer Links -->
	  
		<hr>
	  
		<!-- Call to action -->
		<ul class="list-unstyled list-inline text-center py-2">
		  
			<li class="list-inline-item">
			
				<h5 class="mb-1">Register for free</h5>
		  
			</li>
			
			<!-- If a session has not been started -->
			<?php if(!isset($_SESSION['id'])): ?>
			<li class="list-inline-item">
			
				<a href="signUp.php" class="btn btn-danger btn-rounded">Sign up!</a>
		  
			</li>
			<?php endif?>

			<!-- If a session has not been started -->
			<?php if(isset($_SESSION['id'])): ?>
			<li class="list-inline-item">
			
				<a href="phpBackend/logout.php" class="btn btn-danger btn-rounded">LOGOUT</a>
	  
			</li>
			<?php endif?>
			
			<li class="list-inline-item">
				<a href="siteMap.php"><h5 class="mb-1"> Site Map </h5></a>
			</li>
			
					
		</ul>
		<!-- Call to action -->
	  
		<hr>
	  
		<!-- Social buttons -->
		<ul class="list-unstyled list-inline text-center">
		 
			<li class="list-inline-item">
			
				<a class="btn-floating btn-fb mx-1" href="https://www.facebook.com">
			  
					<i class="fab fa-facebook-f"> </i>
			
				</a>
		  
			</li>
		  
			<li class="list-inline-item">
			
				<a class="btn-floating btn-tw mx-1" href="https://twitter.com/ToursBit">
			  
					<i class="fab fa-twitter"> </i>
			
				</a>
		  
			</li>
		  
			<li class="list-inline-item">
			
				<a class="btn-floating btn-gplus mx-1" href="https://about.google/intl/en/products/?tab=wh">
			  
					<i class="fab fa-google-plus-g"> </i>
			
				</a>
		  
			</li>
		  
			<li class="list-inline-item">
			
				<a class="btn-floating btn-li mx-1" href="https://www.linkedin.com/company/bittours/about">
			  
					<i class="fab fa-linkedin-in"> </i>
			
				</a>
		  
			</li>
		
		</ul>
		<!-- Social buttons -->
	  
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3"> © 2019 Copyright:
		  
			<a href="index.php"> BitTours.com</a>
		
		</div>
		<!-- Copyright -->
	  
	  </footer>
	  <!-- Footer -->


</body>
</html>