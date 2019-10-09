<!DOCTYPE html>
<html>
<head>
	<title>Webtech 2019</title>
	<script type="text/javascript" src="index.js"></script>

</head>
<body>

	<h1>Form Handling</h1>

	<form method="POST" action="process.php">

		<label>Search</label>

		<input type="text" name="searchterm" id = "search">

		<input type="submit" name="find" value = "Search" onclick = "handleSubmit()"><br>

<!--
		<input type="radio" name="male">Male <br>

		<input type="radio" name="male">Female <br>
-->
	</form>
<!-- php goes here -->
	<?php
		//check if the button is clicked
		if(isset($_GET['find'])){
			//create a variable to get the input the user typed
			$value = $_GET["searchterm"];
			//output the users input
			echo "$value";
		}

	?>

</body>
</html>