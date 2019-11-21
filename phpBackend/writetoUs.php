<?php

require('function.php');
require('session.php');

if(isset($_SESSION['id'])){
    
    $id = $_SESSION['id'];

}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['sbtBtn'])) {

        $name = sanitizeData($_POST['revName']);

        $email = sanitizeData($_POST['revEmail']);

        $subject = sanitizeData($_POST['revSubject']);

        $review = sanitizeData($_POST['review']);

        $createQuery = "INSERT INTO user_concern (u_id, Fullname, email, subject, review) VALUES (?, ?, ?, ?, ?)";

        $db = new mysqli(DATABASE, USERNAME, PASSWORD, DB_NAME);

    }

    $userConcern = mysqli_prepare($db, $createQuery);
            
    $userConcern->bind_param("sssss", $id, $name, $email, $subject, $review);

    $result = $userConcern->execute();

    if($result){

        echo "alert('You account has been created')";

        header('Location: ../index.php');
        
    }
    else{
        return false;
    }

}

?>