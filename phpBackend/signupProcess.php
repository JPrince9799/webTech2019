<?php


require('function.php');

$errors = array();

$db = new mysqli(DATABASE, USERNAME, PASSWORD, DB_NAME);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['subBtn'])) {
        
        $name = sanitizeData($_POST['f_name']);

        $uname = sanitizeData($_POST['u_name']);

        $email = sanitizeData($_POST['mail']);

        $i_pword = sanitizeData($_POST['p_word']);

        $v_pword = sanitizeData($_POST['vp_word']);


        //check the databse if a username of email already exists
        $check_query = "SELECT * FROM users WHERE uName='$uname' OR email='$email' LIMIT 1";

        $result = mysqli_query($db, $check_query);

        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists

            if ($user['uName'] === $uname) {

              echo "Username already exists" . "\n";
            
            }
        
            if ($user['email'] === $email) {

              echo "email already exists" . "\n";
            
            }

        }
        else if(
            preg_match("/^(?=.{4,20}$)(?:[a-zA-Z\d]+(?:(?:\.|-|_)[a-zA-Z\d])*)+$/", $uname) &&
            ($i_pword == $v_pword) &&
            !signUP($name, $uname, $email, $i_pword)
        ){

            echo "Your Account has been created";

        }
        else{
            
            echo "Account unable to create" . "<br>" . "Check you Username and make sure both Passwords Match!!";

        }

    }
    // !preg_match("/^(?=.{4,20}$)(?:[a-zA-Z\d]+(?:(?:\.|-|_)[a-zA-Z\d])*)+$/", $uname) &&
    // ($i_pword == $v_pword)
}
// if($_SERVER["REQUEST_METHOD"] == "GET"){

//     if(isset($GET[])){

//     }

// }
?>