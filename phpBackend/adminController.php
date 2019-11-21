<?php

require('db_access.php');

if($_SERVER["REQUEST_METHOD"] == "GET"){
		
    if(isset($_GET['edit'])) {

        $name = $_GET['edit'];

        $user_object = new registerAuthenticate;

        $user_object->read("name='$name'");

        $row = $user_object->db_fetch();
        
        displayForm($row['id'], $row['name'], $row['phone'], 'Edit Contact');

    }
    else if(isset($_GET['del'])) {
        $id = $_GET['del'];

        $user_object = new Contact($id=$id);

        $user_object->delete();

        header("Location: .");
    }
    else {

        displayForm('','','','Create New Contact');
    }
} 

?>