<?php

/**
 * This is the php block that handles the login validation
 */
require('phpBackend/function.php');
require('phpBackend/session.php');

//first check if there is an active session
if(isset($_SESSION['id'])){
	//if a session is created redirect them to the dashboard
	header('Location: index.php');

}

//This is the variable that holds the error message is there is a problem with the validation.
$error = "";

//these are the variable that hold the login data
$email = $pword = "";

//variable to create an instance of the database
$db = new mysqli(DATABASE, USERNAME, PASSWORD, DB_NAME);

//Using AJAX request to find the method being used by the form
//checks to find out if the request methods if GET
if($_SERVER["REQUEST_METHOD"] == "GET"){

	//this checks that the button has been clicked
    if(isset($_GET['submit'])) {

		//this gets the users email input
        $email = $_GET['email'];

		//this gets the users passoword input
		$pword = $_GET['pword'];
		
		//this is a variable to hold the query that will run and fetch the users data.
		$loginUser = "SELECT u_id, Fullname, uName, email, u_password FROM users";
		// $loginUser = "SELECT Fullname, uName, email, u_password FROM users WHERE email LIKE '%$email%' AND u_password LIKE '%$pword%'";

		//variable to store the query response
		$result = $db->query($loginUser);

		if($result->num_rows > 0){

			while($row = $result->fetch_assoc()){
				//get the email of the user
				$lemail = $row['email'];
				//get the password
				$loginPassword = $row['u_password'];

				//compare the entered password with the database password
				if(
					$lemail == $email &&
					$loginPassword == md5($pword)
				){

					//create a session for the user that logs in succefully
					$_SESSION['id'] = $row['u_id'];

					$_SESSION['email'] = $row['email'];

					$_SESSION['username'] = $row['uName'];

					$_SESSION['name'] = $row['Fullname'];

					$_SESSION['p_image'] = $row['user_img'];
					
					//direct the user to their dashboard
					header('Location: index.php');

				}
				else{

					//error message if one of the entered data is incorrect
					$error = "Email or Password Incorrect";

				}

			}

		}
		
        
    }

}

?>



<!-- HTML CODE -->


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Login</title>
	<link href="css/userLogin.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/login.js"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="bcss/bootstrap-grid.min.css"/>
	<link rel="stylesheet" href="bcss/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="bcss/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>

<body>

	<!--Sticky navbar-->
	<div class="sticky">
		<!--Navbar-->
		<nav class="navbar navbar-default navbar-expand-lg navbar-dark posi1">

			<!-- Navbar brand -->
			<a class="navbar-brand" href="index.php"> BIT TOURS <img src="images/flying-clipart-flight-logo.png" width="60" id="logo"></a>

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

					<li class="nav-item">
					
							<a class="nav-link" href="contact.php"> Contact Us </a>
						
					</li>
				
				</ul>
				<!-- Links -->

				<form class="form-inline">
				
					<!--<div class="md-form my-0">
						<input class="form-control rounded-sm mr-sm-2 colorchg" type="text" placeholder="SEARCH HERE" aria-label="Search">
					</div>>-->
				
				</form>

					<div class="btn-group" role="group" aria-label="Basic example">
							<a href="signUp.php"><button type="button" class="btn btn-pink btn-rounded text-light"> SIGN UP </button></a>

					</div>
		  	  
			</div> 
		
		<!-- Collapsible content -->

		</nav>
	<!--/.Navbar-->	

	<form class="boxer" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
		
		<img class="global" alt="logo" src="images/flyingLogo1.png" width="100px">
	
		<h1>Welcome Back</h1>
		
		<h3>Let's get you started!</h3>

		<h6><span id="loginError"> <?php echo $error?> </span></h6>
		
		<input type="email" name="email" placeholder="Enter Email" id="l_email" require autofocus onkeypress="this.style.width = ((this.value.length + 5) * 10) + 'px';" value = "<?php echo $email?>">
		
		<input type="password" name="pword" placeholder="Enter Password" id="l_pword" require onkeypress="this.style.width = ((this.value.length + 5) * 10) + 'px';">
		
		<input type="submit" name="submit" value="LOGIN" id ="sbtBTN">
		
		
		<a href="forgetPword.php">Forgot your Password?</a>
			
			<br><br>
			
		<a href="signUp.php">Don't have an account?</a>
		
	</form>
		
</body>
</html>