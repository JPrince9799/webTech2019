<?php

	require('credentialClass.php');

	function sanitizeData($input) {
	
		$data = trim($input);
	
		$data = stripslashes($data);
	
		$data = htmlspecialchars($data);
	
		return $data;

	}

	function signUP($name, $u_name, $mail, $init_pword){

		$newUser = new registerAuthenticate($name, $u_name, $mail, $init_pword);

		$newUser->createAccount();

	}

	function changePassword($password){

		$user = new registerAuthenticate;

		$user->updatePassword($password);

	}

	function displayForm($id,$name,$phone,$form_title) {
		echo "<br>";

		echo "<h3>$form_title</h3>";

		echo "
			<form method='POST' action='controller.php'>
				<input type='hidden' name='uid' value=$id>

				<label>Name</label>
				<input type='text' id='uname' name='uname' value=$name>
				<br><br>

				<label>Phone Number</label>
				<input type='text' id='uphone' name='uphone' value=$phone>
				<br><br>

				<input type='submit' value='Submit' name='add_button'>

			</form>";
	}

?>