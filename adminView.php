<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Administrator View </title>

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
	
	<!-- <script type="text/javascript" src="js\jquery-ui-1.12.1\jquery-ui-1.12.1\jquery-ui.min.js"></script> -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<body>
   
    <div class="jumbotron jumbotron-fluid">
        
        <div class="container">
        
            <h2 class="display-4">Welcome to the Admin View</h2>
        
            <p class="lead">This is a list of all the users on the website!</p>
            
            <p class="lead">This is view is meant for authorized user only. User accounts can be edited or deleted from this view</p>

            <a class="btn btn-primary btn-lg" href="index.php" role="button"> Back to Home </a>                    
        
        </div>
               
    </div>

    <?php

    require('phpBackend/credentialClass.php');

    $allview = new registerAuthenticate;

    $allview->read();

    echo "
            <table class='table' style='border: 1px solid'>

            <thead class='black white-text'>
                <tr>
                <th scope='col'>User ID</th>
                <th scope='col'>Fullname</th>
                <th scope='col'>Email</th>
                <th scope='col'>Write to Us</th>
                <th scope='col'>Action</th>
                </tr>
            </thead>
            
    ";

    while($row = $allview->db_fetch()){

        $id = $row["u_id"];
        $name = $row["Fullname"];
        $email = $row["email"];
        $review = $row['review'];

        echo "
            <tbody>
                <tr>
                    <th scope='row'>$id</th>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$review</td>
                    <td>
                        <a href='phpBackend/adminController.php?edit=$id'> EDIT </a> 
                        <a href='phpBackend/adminController.php?del=$id'> DELETE </a>
                    </td>
                </tr>
            </tbody>
		";

    }

    echo "</table>";

    ?>

</body>
</html>
