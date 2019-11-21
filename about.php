<?php

require('phpBackend/session.php');

if(isset($_SESSION['id'])){
	$admin = "Administrator";
	$sessName = $_SESSION['name'];
}

?>





<!-- HTML CODE -->





<!doctype html>
<html>
    <head>

      <title> About Us </title>
      <link href="css/about.css" rel="stylesheet" type="text/css">
      <!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
	
	<!-- JQuery -->
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<!-- Bootstrap tooltips -->
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script> -->
	
	
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
<!--Sticky navbar-->
<div class="sticky">

<?php if(!isset($_SESSION['id'])): ?>
<!--Navbar-->
<nav class="navbar navbar-default navbar-expand-lg navbar-dark posi1">
<?php endif?>

<?php if(isset($_SESSION['id'])): ?>
<nav class="navbar navbar-default navbar-expand-lg navbar-light posi1">
<?php endif?>

	<!-- Navbar brand -->
	<a class="navbar-brand" href="index.php">Bit Tours <img src="images/flying-clipart-flight-logo.png" width="60" id="logo"></a>

	<!-- Collapse button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
		
			aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
		
	<span class="navbar-toggler-icon"></span>
	
	</button>

	<!-- Collapsible content -->
	<div class="collapse navbar-collapse" id="basicExampleNav">

		<!-- Links -->
		
		<ul class="navbar-nav mr-auto">
		
			<li class="nav-item">
			
			<a class="nav-link" href="index.php"> Home </a>
		
			</li>

			<li class="nav-item active">
			
			<a class="nav-link" href="about.php"> About </a>
		
			</li>
			
			<li class="nav-item">
			
					<a class="nav-link" href="gallery.php"> Gallery </a>
				
			</li>

			<li class="nav-item">
			
					<a class="nav-link" href="contact.php"> Contact Us </a>
				
			</li>
		
		</ul>
		<!-- Links -->

		<form class="form-inline">
		
			<div class="md-form my-0">
				
				<input class="form-control rounded-sm mr-sm-2 colorchg" type="text" placeholder="SEARCH HERE" aria-label="Search">
			
			</div>
		
		</form>

		<?php if(!isset($_SESSION['id'])): ?>

			<div class="btn-group" role="group" aria-label="Basic example">
					
					<a href="signUp.php"><button type="button" class="btn btn-pink btn-rounded text-light"> SIGN UP </button></a>

			</div>
									
			<div class="btn-group" role="group" aria-label="Basic example">
					
					<a href="userLogin.php"><button type="button" class="btn btn-outline-pink btn-rounded waves-effect"><i class="fas fa-user-secret fa-sm pr-2" aria-hidden="true"></i> LOGIN </button></a>

			</div>
			<?php endif?>


		<?php if(isset($_SESSION['id'])):?>

			<nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">

				<div class="collapse navbar-collapse" id="navbarSupportedContent-555">

					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item avatar dropdown">

							<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fas fa-user"></i>
							
								<!-- <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg " class="rounded-circle z-depth-3" alt=""> -->

							</a>
							
							<div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
								
								<a class="dropdown-item" href="editProfile.php" >Edit Profile</a>
								
								<a class="dropdown-item" href="uploadImage.php">Upload Image</a>

								<?php if($sessName == $admin):?>

									<a class="dropdown-item" href="adminView.php">View Users</a>

								<?php endif?>
								
								<a class="dropdown-item" href="phpBackend/logout.php">Logout</a>
							
							</div>
						
						</li>
					
					</ul>

				</div>

			</nav>
				
		<?php endif?>

	</div> 

<!-- Collapsible content -->
</nav>

</div>

<!--/.Navbar-->

<!--Carousel Wrapper-->
		
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
		  
				<!--Indicators-->
		  
				<ol class="carousel-indicators">
			
					<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
			
					<li data-target="#carousel-example-2" data-slide-to="1"></li>
			
					<li data-target="#carousel-example-2" data-slide-to="2"></li>
		  
				</ol>
		  
				<!--/.Indicators-->
		  
				<!--Slides-->
		  
				<div class="carousel-inner" role="listbox">
			
					<div class="carousel-item active">
			  
						<div class="view">
				
							<img class="d-block w-100" src="images\the-bar_capitolkempinskisg.jpg" alt="First slide">
				
							<div class="mask rgba-black-light"></div>
			  
						</div>
			  
						<div class="carousel-caption">
				
							<h3 class="h3-responsive">INSIDE THE CAPITOL</h3>
				
							<p>Immerse Yourself and Wander in the Glory of Premium Capitol Services</p>
			  
						</div>
			
					</div>
			
					<div class="carousel-item">
			  
						<!--Mask color-->
			  
						<div class="view">
				
							<img class="d-block w-100" src="images\slider_deluxe-junior-suite-01.jpg" alt="Second slide">
				
							<div class="mask rgba-black-strong"></div>
			  
						</div>
			  
						<div class="carousel-caption">
				
							<h3 class="h3-responsive">SERENITY AND PEACE</h3>
				
							<p>With a Worldwide Network of the Best of Hostels, Flourish Wherever you GO! </p>
			  
						</div>
			
					</div>
			
					<div class="carousel-item">
			  
						<!--Mask color-->
			  
						<div class="view">
				
							<img class="d-block w-100" src="images\kempinski-st-moritz-summer.jpg" alt="Third slide">
				
							<div class="mask rgba-black-slight"></div>
			  
						</div>
			  
						<div class="carousel-caption">
				
							<h3 class="h3-responsive">LIVE LIKE A KING</h3>
				
							<p>At the Friendliest Prices, do not be Left out on Luxury!</p>
			 
						</div>
			
					</div>
		 
				</div>
		  
				<!--/.Slides-->
		 
				<!--Controls-->
		  
				<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
			
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			
					<span class="sr-only">Previous</span>
		  
				</a>
		  
				<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
			
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
			
					<span class="sr-only">Next</span>
		 
				</a>
		  
				<!--/.Controls-->
		
			</div>
		
			<!--/.Carousel Wrapper-->

<br><br><br>

	<!-- HEADER ABOUT US -->
			<div class="container">
				<hr>
				<h4 class="strikethrough display-4 text-center text-info"><span>Get to know About Us</span></h4>
				<hr>
      </div>
<br><br>
  <!-- About us text -->
      <div>

      	<section class="container">

			<h6 class="display-5 text-center">
			The aim of this organisation is to ensure that all users enjoy the maximum benefit and comfort that Bit tours has to offer on this web platform.
			Bit Tours was founded in 2019 by a group of young individuals from Ashesi Univesity. The establishment of this company was to help provide some
			national and international individuals with travel solutions and destinations with some of the sceneries that they would like to visit either
			as individuals or as a family trip and / or destination.<br>
			The problem Bit Tours seeks to solve is the gap created when tourists seek the perfect and most suitable destination and lodging location after 
			they have decided to make the best out of any visit. We are the meeting point between the realization of a perfect vacation and the idea of enjoying 
			one, be it taking care of location, site, tour guiding, community review and personal recommendation.
			Our foremost operation is giving advice of the best tourist locations in the world and tagging them according to the best time of visit. We do this through or 
			website which aims presents visitors with information on the best places to visit at the time which me be as a result of the weather at the time, the events happening 
			within a culture and the kind of food present at the time.<br>
			Also, Bit Tours gives customers and tourists the opportunity to thoroughly review, critique and recommend places of visit after a vacation. There are chat forums which
			allow visitors to share experiences and inform new visitors of what it is like to be at a tourist site. Tourists can upload pictures of their activities and build an 
			experience visualizer. A visitor, after seeing a recommended location, can add it to his/her wish list should they please.
			Moreover, the Bit Tours website serves as a guide in itself. It provides mapping services for customers to enable them to track their movement and find their way around 
			a new location. It will inform of the nearest service points like restaurants, call booth, info centers and recreational points.
			Bit Tours primarily seeks to be a tourist’s best companion right before, during and after an experience.
			</h6>

      	</section>
      </div>

<br><br><br>

  <!-- HEADER ABOUT US -->
      <div class="container">
        <hr>
        <h4 class="strikethrough display-3 text-center text-info"><span> EXPERIENCE AFRICA </span></h4>
        <hr>
      </div>

<br>

  <!-- ABOUT US VIDEO -->
      <div class="container">
        
        <video class="video-fluid z-depth-5" autoplay loop controls muted id="myVideo">
          
          <source src="images/Africa.mp4" type="video/mp4" />
      
        </video>
      
      </div>

<br><br><br>

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
