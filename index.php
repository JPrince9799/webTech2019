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
	<meta charset="utf-8">

	<title>Bit Tours Homepage</title>
	<link href="css/index.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="css/editProfile.css">
    <script type="text/javascript" src="js/editProfile.js"></script>
	
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
					
						<li class="nav-item active">
						
						<a class="nav-link" href="index.php"> Home </a>
					
						</li>

						<li class="nav-item">
						
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
									
									<li class="nav-item dropdown">

										<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										
											<i class="fas fa-user"></i>
											
											<!-- <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-3" alt=""> -->

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


<?php if(!isset($_SESSION['id'])): ?>
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

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--/.Carousel Wrapper-->

<!-- 3D CAROUSEL WRAPPER -->
<?php else: ?>
<br><br><br><br><br>
	
	<div class="jumbotron">
	
		<h2 class="display-4">Welcome Back <?php echo $_SESSION['name']?>!</h2>
	
		<p class="lead">We are always glad to have you back to make more reviews...</p>
	
		<hr class="my-4">
	
		<p>CLICK THE BUTTON BELOW AND LETS GET STARTED WITH YOUR REVIEWS <i class="far fa-smile-wink"></i></p>

		<?php if($sessName == $admin):?>

			<a class="btn btn-primary btn-lg" href="adminView.php" role="button"> View Users </a>

		<?php else:?>
			
			<a class="btn btn-primary btn-lg" href="uploadImage.php" role="button"> Get Started </a>

		<?php endif?>
	
	</div>


<!-- 3D CAROUSEL WRAPPER -->


<?php endif?>	

		<!-- header-->
			<div class="container">
				<hr>
				<h4 class="strikethrough display-4 text-center text-info"><span>Exclusive Offers</span></h4>
				<hr>
			</div>
	
			<!--image cards-->
			<br>
			<div class="row marg">
				<div class="col-sm-4">
					<span class="container-fluid profiles">
						<div class="card pro3" style="width:80%">
							<img class="card-img-top" src="images\interior-london3.jpg" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">Super Sonic Spike Jets</h4>
								<p class="card-text">Fly in style. Make a statement wherever you go! Explore our rages of exclusive and 
									classy flying deals with our aircraft partners and Spike Aircrafts.
								</p>
								<a href="#" class="btn btn-primary">Explore</a>
							</div>
						</div>
					</span>
				</div>
				<div class="col-sm-4">
					<span class="container-fluid profiles">
						<div class="card pro3" style="width:80%">
							<img class="card-img-top" src="images\1280x720_180430_News_Virtuoso_Hero.jpg" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">Bali Get-Away</h4>
								<p class="card-text">Thinking of a get-away honey moon with him/her? Planning on leaving the hildren behind 
									for 'us' time? Take a peek at these offers in our Bali deal section.
								</p>
								<a href="#" class="btn btn-primary">Explore</a>
							</div>
						</div>
					</span>
				</div>
				<div class="col-sm-4">
					<span class="container-fluid profiles">
						<div class="card pro3" style="width:80%">
							<img class="card-img-top" src="images\21014104_1972674993015734_623945774955067142_o.jpg" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">Pleasure. On-Land. In-Air.</h4>
								<p class="card-text">With our Tour Plus packages, see what you can do to bless vacation with the most amazing of 
									activities. Our Skydiving special will blow you away. Literally.
								</p>
								<a href="#" class="btn btn-primary">Explore</a>
							</div>
						</div>
					</span>
				</div>
				<div class="col-sm-4">
					<span class="container-fluid profiles">
						<div class="card pro3" style="width:80%">
							<img class="card-img-top" src="images\veniceguide.jpg" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">Mer-rist of Venice</h4>
								<p class="card-text">Themed after the Merchant of Venice franchise, our summer special features a round-trip of 
									Venice and other spots in Italy. 
								</p>
								<a href="#" class="btn btn-primary">Explore</a>
							</div>
						</div>
					</span>
				</div>
				<div class="col-sm-4">
					<span class="container-fluid profiles">
						<div class="card pro3" style="width:80%">
							<img class="card-img-top" src="images\368351827.png" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">Qatar Dreams</h4>
								<p class="card-text">The place to be every fall is the desert stripped, money-soaked Qatari capital, Doha. 
									At the Pearl, you will be served a good life.
								</p>
								<a href="#" class="btn btn-primary">Explore</a>
							</div>
						</div>
					</span>
				</div>
				<div class="col-sm-4">
					<span class="container-fluid profiles">
						<div class="card pro3" style="width:80%">
							<img class="card-img-top" src="images\toppbild_skidakning_alvan_1920x800.jpg" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">Ski @ Arjeplog</h4>
								<p class="card-text">Dear petrol-heads, we got you covered with  Mercedes-Amg powered ski sessions which 
									will please your heart with engines manufactured by the German gurus.
								</p>
								<a href="#" class="btn btn-primary">Explore</a>
							</div>
						</div>
					</span>
				</div>
			</div>
	
	<br><br><br>
		
		<?php if(!isset($_SESSION['id'])): ?>
		<div class="container">
			<hr>
				<h4 class="strikethrough display-4 text-center text-info"><span>Featured</span></h4>
			<hr>
		</div>

		<div class="container">
			<video autoplay muted loop id="myVideo">
				<source src="images\Aventador S_ Dare your EGO.mp4" type="video/mp4">
			</video>	
			<div class="content text-center">
				<h1 class="display-4">What Drives You?</h1>
				<h5 class="text-light">See what you can do with our Driven Passion package.</h5>
				<button type="button" class="btn btn-outline-light align">Explore</button>
			</div>		
		</div>
		<?php endif?>
		
		
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
			  <a href="TnC.php"> Terms and Conditions </a>
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
