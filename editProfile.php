<?php

require('phpBackend/session.php');
require('phpBackend/function.php');

//create variables to hold the information that users info
$i_pword = $v_pword = "";

//create variables to hold the error message
$passwordError="";

//create a boolean variable to verify there are no error in the entries
$passwordValid = null;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['subBtn'])) {
        //variables to hold the data the user is registering with
        $i_pword = sanitizeData($_POST['p_word']);

        $v_pword = sanitizeData($_POST['vp_word']);
		
		//username and email validation
        if ($i_pword != $v_pword) { // if user exists

			    $passwordError = "The <strong> PASSWORDS </strong> do not match!!!!!";
			  
          $passwordValid = false;
              
        }
        else{

          $passwordValid = true;

        }


        //create the account logic
        //when the account is successfully created the user is redirected to the login page
        if($passwordValid == true){

          changePassword($i_pword);
          
          header('Location: index.php');

        }
        else{

            $passwordError = "The <strong> PASSWORDS </strong> do not match!!!!!";
			  
            $passwordValid = false;

            //header('Location: editProfile.php');

        }

	}
}

?>




<!-- HTML CODE -->






<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/editProfile.css">
    <script type="text/javascript" src="js/editProfile.js"></script>
    <title>Edit User Profile</title>

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
<!-- This section of code only runs when a user has logged in -->
<?php if(isset($_SESSION['id'])):?>

<div class="container">
    
    <h1>Edit Your Profile</h1>
  	<hr>
	
    <div class="row">
      <!-- left column -->
      <!-- <div class="col-md-3">
        
        <div class="text-center">
        
          <img src="//placehold.it/250" class="avatar img-circle" alt="Upload Avatar">
          
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control" id="filename">
        
        </div>
      
      </div> -->
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <div class="alert alert-info alert-dismissable">
          
            <a class="panel-close close" data-dismiss="alert">×</a> 
          
            <i class="fas fa-exclamation-circle"></i>
        
              <?php echo $passwordError ?>
              
              <!-- This is an <strong>.alert</strong>. Use this to show important messages to the user. -->
        
        </div>
        
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" readonly placeholder="<?php echo $_SESSION['name']?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" readonly value="<?php echo $_SESSION['username']?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" readonly placeholder="<?php echo $_SESSION['email']?>">
            </div>
          </div>

          <!-- <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div> -->

          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="p_word" value="<?php echo $i_pword?>" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="vp_word" placeholder="Confirm Password" required>
            </div>
          </div>

          <div class="form-group">
            
            <label class="col-md-3 control-label"></label>
            
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="subBtn" value="Save Changes">
              <span></span>

              <input type="reset" class="btn btn-default" value="Cancel">
              <span></span>

              <a href="index.php" ><input type="button" class="btn btn-default" value="Back to Home"></a>
            </div>
          
          </div>

        </form>

      </div>
  
  </div>

</div>
<hr>

<?php endif?>
</body>
</html>