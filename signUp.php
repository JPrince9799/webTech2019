
<?php

require('phpBackend/function.php');
require('phpBackend/session.php');

//first check if there is an active session
if(isset($_SESSION['id'])){

	header('Location: index.php');

}

//create variables to hold the information that user is registering with
$name = $uname = $email = $i_pword = $v_pword = "";
//create variables to hold the error messages
$userError = $passwordError = $emailError = "";
//create a boolean variable to verify there are no error in the entries
$accountValid = null;
//create a db connection
$db = new mysqli(DATABASE, USERNAME, PASSWORD, DB_NAME);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['subBtn'])) {
        //variables to hold the data the user is registering with
        $name = sanitizeData($_POST['f_name']);

        $uname = sanitizeData($_POST['u_name']);

        $email = sanitizeData($_POST['mail']);

        $i_pword = sanitizeData($_POST['p_word']);

        $v_pword = sanitizeData($_POST['vp_word']);


        //check the databse if a username of email already exists
        $check_query = "SELECT * FROM users WHERE uName='$uname' OR email='$email' LIMIT 1";
		//returned query results
        $result = mysqli_query($db, $check_query);
		//fetch existing users in the query
        $user = mysqli_fetch_assoc($result);
		
		//username and email validation
        if ($user) { // if user exists

			//this checks is the username is available
            if ($user['uName'] === $uname) {

			  $userError = "*Username is taken";
			  
			  $accountValid = false;
            
			}
			
			//this checks is the email is availables
            if ($user['email'] === $email) {

			  $emailError =  "*Email already exists";
			  
			  $accountValid = false;
            
            }

		}

		//this checks the validity of the username to make sure that is it standardized
		//this is a regex expression
		else if(preg_match("/^(?=.{4,20}$)(?:[a-zA-Z\d]+(?:(?:\.|-|_)[a-zA-Z\d])*)+$/", $uname)){

			$userError = "Username is invalid";

			$accountValid = false;

		}
		else{

			$accountValid = true;

		}
		
		//password match validation
		if($i_pword != $v_pword){

			$passwordError = "Passwords do not Match!";

			$accountValid = false;

		}
		else{

			$accountValid = true;

		}


		//create the account logic
		//when the account is successfully created the user is redirected to the login page
		if($accountValid == true){

			signUP($name, $uname, $email, $i_pword);
			
			header('Location: userLogin.php');

		}

	}
}
?>



<!-- HTML CODE -->



<!doctype html>
<html>	
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link type="text/css" rel="stylesheet" href="css/signUp.css">
	<script type="text/javascript" src="js/signUp.js"></script>
	<!-- Font Awesome -->
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
					</div>-->
				
				</form>

					<div class="btn-group" role="group" aria-label="Basic example">
							
							<a href="userLogin.php"><button type="button" class="btn btn-outline-pink btn-rounded waves-effect"><i class="fas fa-user-secret fa-sm pr-2"
								aria-hidden="true"></i> LOGIN </button></a>

					</div>		  	  
			</div> 
		
		<!-- Collapsible content -->

		</nav>
	<!--/.Navbar-->

	
	<div class="signupbox">
	
		<img class="avatar" alt="logo" src="images/flyingLogo1.png" width="100px">
		
		<h1> CREATE AN ACCOUNT? </h1>
		
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
	
			<p>Name</p>
			<input type="text" placeholder="Enter Full Name" name="f_name" required id="fname" autofocus onkeypress="this.style.width = ((this.value.length + 5) * 10) + 'px';" value="<?php echo $name;?>">
		
			<p>Username</p>
			<input type="text" placeholder="Enter Username" name = "u_name" required id="userName" onkeypress="this.style.width = ((this.value.length + 5) * 10) + 'px';" value="<?php echo $uname;?>">
			<h6><span class="errorMessage"> <?php echo $userError?> </span></h6>

			<p>Email</p>
			<input type="email" placeholder="Enter Email" name="mail" required id="E_mail" onkeypress="this.style.width = ((this.value.length + 5) * 10) + 'px';" value="<?php echo $email;?>">
			<h6><span class="errorMessage"> <?php echo $emailError?> </span></h6>

			<p>Password</p>
			<input type="password" placeholder="Enter Password" name="p_word" required id="passWord" onkeypress="this.style.width = ((this.value.length + 5) * 10) + 'px';">
			
			<p>Confirm Password</p>
			<input type="password" placeholder="Enter Password Again" name="vp_word" required id="vpassWord" onkeypress="this.style.width = ((this.value.length + 5) * 10) + 'px';">
			<h6><span class="errorMessage"> <?php echo $passwordError?> </span></h6>

			<br>

			<input  type="submit" name="subBtn" value="CREATE ACCOUNT">

			<!-- onmouseover="verification()" -->

			<div id="TnC">
				
				<p> By signing up you agree to our </p>
				<p><a href="TnC.php"> Terms and Conditions Policy </a></p>
				
			</div>
			
			<div class="end">
				
				<p>Already Have an Account? <a href="userLogin.php">Login Here!</a></p>
			
			</div>
		</form>
	
	</div>
	
</body>

</html>
