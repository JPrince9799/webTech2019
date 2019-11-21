<?php

require('session.php');

if(isset($_SESSION['id'])){

    session_destroy();

    header('Location: ../userLogin.php');

}
else{


    header('Location: ../index.php');

}

?>