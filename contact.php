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

	<title>Contact Us</title>
	<link href="css/contact.css" rel="stylesheet" type="text/css">
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
<nav class="navbar navbar-default navbar-expand-lg navbar-light posi1">
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

			<li class="nav-item">
			
			<a class="nav-link" href="about.php"> About </a>
		
			</li>
			
			<li class="nav-item">
			
					<a class="nav-link" href="gallery.php"> Gallery </a>
				
			</li>

			<li class="nav-item active">
			
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
	
    <!-- Section: Contact v.1 -->

    <section class="my-5">
        
        <!-- Section heading -->
		
		<?php if(isset($_SESSION['id'])):?>

			<h2 class="h1-responsive font-weight-bold text-center my-5"> Contact Us <?php echo $_SESSION['name'] ?>! </h2>
		
		<?php else:?>

			<h2 class="h1-responsive font-weight-bold text-center my-5"> CONTACT US! </h2>

		<?php endif?>
        
        <!-- Section description -->
        
        <p class="text-center w-responsive mx-auto pb-5"> We encourage our users to contact us and 
            share their views on the website and other functionalities the website provides. We also
        encourage you to make the most out of our services to reviewed locations in Africa.</p>
          <!-- Grid row -->
        
        
		<div class="row">
      
          <!-- Grid column -->
          
          <div class="col-lg-5 mb-lg-0 mb-4">
      
            <!-- Form with header -->
            
            <div class="card">
              
                <div class="card-body">
                
                    <!-- Header -->
                
                    <div class="form-header blue accent-1">
                  
                        <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
                
                    </div>
                
                    <p class="dark-grey-text">We'll write rarely, but only the best content. We seek
                        your input and view, as well as some concerns you may have on our website.
                    </p>
                
                    <!-- Body -->
                	<form method="POST" action="phpBackend/writetoUs.php">

						<div class="md-form">
					
							<i class="fas fa-user prefix grey-text"></i> 
							
							<label for="form-name">Your name</label>
							
							<?php if(isset($_SESSION['id'])):?>

								<input type="text" id="form-name" name="revName" readonly class="form-control" value = "<?php echo $_SESSION['name'] ?>"">
							
							<?php else:?>
								
								<input type="text" id="form-name" class="form-control">

							<?php endif?>
				
						</div>
					
						<div class="md-form">
					
							<i class="fas fa-envelope prefix grey-text"></i>
					
							<label for="form-email">Your email</label>
							
							<?php if(isset($_SESSION['id'])):?>

							<input type="text" id="form-email" class="form-control" readonly name="revEmail" value = "<?php echo $_SESSION['email'] ?>">

							<?php else:?>

								<input type="text" id="form-email" class="form-control">

							<?php endif?>
					
						</div>
					
						<div class="md-form">
					
							<i class="fas fa-tag prefix grey-text"></i>

							<label for="form-Subject">Subject</label>
					
							<input type="text" id="form-Subject"  name="revSubject" class="form-control" required>
					
						</div>
					
						<div class="md-form">
					
							<i class="fas fa-pencil-alt prefix grey-text"></i>

							<label for="form-text">Send message</label>

							<input type="text" id="form-Subject"  name="review" class="form-control" required>
					
						</div>
					
						<div class="text-center">
					
							<button class="btn btn-light-blue" name="sbtBtn">Submit</button>
					
						</div>
				
					</form>
              
                </div>
            
            </div>
            <!-- Form with header -->
          
        </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-lg-7">
      
            <!--Google map-->
            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
              
                <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="1"
                
                style="border:0" allowfullscreen></iframe>
            
            </div>
            
            <!-- Buttons-->
            
            <div class="row text-center">
              
                <div class="col-md-4">
                
                    <a class="btn-floating blue accent-1">
                 
                        <i class="fas fa-map-marker-alt"></i>
                
                    </a>
                
                    <p>Accra, 00233</p>
                
                    <p class="mb-md-0">Ghana</p>
              
                </div>
              
                <div class="col-md-4">
                
                    <a class="btn-floating blue accent-1">
                  <i class="fas fa-phone"></i>
                
                </a>
                
                <p>+233 274 139 1234</p>
                
                <p class="mb-md-0">Mon - Sun, 24h</p>
              
            </div>
              
            <div class="col-md-4">
                
                <a class="btn-floating blue accent-1">
                  
                    <i class="fas fa-envelope"></i>
                
                </a>
                
                <p>bitTours@gmail.com</p>
                
                <p class="mb-0">bitTours@outlook.com</p>
              
            </div>
            
        </div>
      
          
    </div>
          
    <!-- Grid column -->
      
        
</div>
        
<!-- Grid row -->
      
      
</section>
      
<!-- Section: Contact v.1 -->

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