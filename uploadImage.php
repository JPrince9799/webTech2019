<?php

require('phpBackend/session.php');

if(isset($_POST['subBtn'])){

  $name = $_POST['imgName'];

  $imgType = $_POST['imgOption'];

  $img = $_FILES['image']['imgName'];

  $address = $_POST['imgAddress'];

  $country = $_POST['imgCountry'];

  $description = $_POST['imgDescription'];

  $sql = "INSERT INTO `$imgType`(`name`, `address`, `countryName`, `description`, `imgPath`) VALUES ('$name', '$address', '$country', '$description', '$img')";

  if(mysqli_query($sql)){

    move_uploaded_file($_FILES['image']['tmp_name'],"images/'$imgType'/$img");
    echo "<script>alert('Image has been added')</script>";

  }
  else if(mysqli_query($sql)){

    
    echo "<script>alert('Image is uploading')</script>";

  }
  else{
    echo "<script>alert('Image has not been added')</script>";
  }

}

?>



<!-- HTML CODE -->




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/uploadImage.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select-country.min.css">
    <script type="text/javascript" src="js/uploadImage.js"></script>
    <script type="text/javascript" src="js/bootstrap-select-country.min.js"></script>
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
    
    <h1>Upload a Review!</h1>
  	<hr>

    <form method="GET" action="#">
        
        <div class="row">
          <!-- left column -->
          <div class="col-md-3">
            
            <div class="text-center">
            
              <img src="" class="avatar img-circle" alt="Upload Avatar">
              
              <h6>Upload a different photo...</h6>
              
              <input type="file" class="form-control" name="image">
            
            </div>
          
          </div>
          
          <!-- edit form column -->
          <div class="col-md-9 personal-info">
            
            <!-- <div class="alert alert-info alert-dismissable">
              
                <a class="panel-close close" data-dismiss="alert">×</a> 
              
                <i class="fas fa-exclamation-circle"></i>
            
                  This is an <strong>.alert</strong>. Use this to show important messages to the user.
            
            </div> -->
            
            <h3> Tourists Info </h3>
            
            <form class="form-horizontal" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
              
              <div class="form-group">
                <label class="col-lg-3 control-label">Image Name:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" placeholder="Enter the image name" name="imgName" require>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">Image Type</label>
                <div class="col-md-8">

                    <select class="form-control" name="imgOption">
                        <option readonly> Select Option..... </option>
                        <option name="hotel" value="hotel"> Hotels </option>
                        <option name="restaurant" value="restaurant"> Restaurants </option>
                        <option name="tSite" value="tSite"> Tourist_Sites </option>
                    </select>

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Address</label>
                <div class="col-md-8">

                  <input type="text" class="form-control" name="imgAdress" placeholder="Enter Address Here..." require>

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Country</label>
                <div class="col-md-8">

                  <input type="text" class="form-control" name="imgCountry" placeholder="Enter Country Here..."require>

                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Image Description</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" name="imgDescription" placeholder="Enter a brief Description here....." require>
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
    </form>
</div>
<hr>

<?php endif?>
</body>
</html>
