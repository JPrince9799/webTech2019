<?php


require('function.php');

$error = "";

$db = new mysqli(DATABASE, USERNAME, PASSWORD, DB_NAME);

if($_SERVER["REQUEST_METHOD"] == "GET"){

    if(isset($_GET['submit'])) {

        $email = $_GET['email'];

        $pword = $_GET['pword'];

        if(
            !empty($email) &&
            !empty($pword)
        ){
            
            login($email, $pword);

            echo "it worked";

            header('Location: userProfile.php');
        }
        else{
            $error = "Username or Password incorrect";
        }

        //check the databse if a username of email exists
        // $check_query = "SELECT * FROM users WHERE uName='$uname' AND email='$email' LIMIT 1";

        // $result = mysqli_query($db, $check_query);

        // $user = mysqli_fetch_assoc($result);
        
        // if ($user) { // if user exists

        //     if ($user['uName'] === $uname) {

        //       echo "Username already exists" . "\n";
            
        //     }
        
        //     if ($user['email'] === $email) {

        //       echo "email already exists" . "\n";
            
        //     }

        // }
        
    }
    // !preg_match("/^(?=.{4,20}$)(?:[a-zA-Z\d]+(?:(?:\.|-|_)[a-zA-Z\d])*)+$/", $uname) &&
    // ($i_pword == $v_pword)
}

?>