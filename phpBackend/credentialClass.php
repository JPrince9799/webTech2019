<?php

    require('db_access.php');

    /**
     * @author Joseph Prince - Agbodjan
     * @version 1.1
     * This is a class that handles the aunthentications and reading and writing into the database
     */
    class registerAuthenticate extends db_access{

        private $id = null;

        //class properties
        private $name = null;
        private $userName = null;
        private $email = null;
        private $init_pword = null;
        private $createUser = "INSERT INTO users (Fullname, uName, email, u_password) VALUES (?, ?, ?, ?)";
        private $loginUser = "SELECT Fullname, uName, email, u_password FROM users";

        /**
         * @param a parameter of the users signup name
         * @param a parameter of the users email address
         * @param a parameter of the users password
         * This is the default class constructor that takes the user signup details in stores them in the class properties
         */
        function __construct($name='none', $uname='none', $mail='none', $i_pword='none'){
            
            //store the users name
            $this->name = $name;
            
            //store the userName
            $this->userName = $uname;

            //store the email
            $this->email = $mail;
            
            //store the password
            $this->init_pword = md5($i_pword);

            $this->db_connect();

        }
        
        /**
         * This is the function that is responsible for the creation of user accounts
         * if the user details that are entered are successful they are added to the database
         * @return returns the query that the user has been added
         */
        public function createAccount(){

            //create a variable to store the query that adds the new user
            $userAccount = mysqli_prepare($this->db, $this->createUser);
            
            $userAccount->bind_param("ssss", $this->name, $this->userName, $this->email, $this->init_pword);

            //store the query outcome
            //$result = $this->execute_query($userAccount);

            $result = $userAccount->execute();
            
            //return the results
            return $result;
            
            $this->db->close();

        }

        /**
         * This is the function that can allow the administrator to delete a users account
         * @return returns the query that the users account has been deleted
         */
        public function deleteAccount(){
            
            //create variable to select the account to be delete
            $userAccount = "INSERT INTO contact SET name='$this->name', phone='$this->phone'";

            //store the query outcome
            $result = $this->execute_query($userAccount);
            
            //return the results
			return $result;
            
        }

        /**
         * This is a function to update the users password
         * @return the query is successful
         */
        public function updatePassword($password){

            $id = $_SESSION['id'];

            //encrypt the password
            $pword = md5($password);
            
            //check the databse if a username of email already exists
            $sql = "UPDATE `users` SET `u_password` = '$pword' WHERE `users`.`u_id` = '$id'";
            
            //returned query results
            $result = mysqli_query($this->db, $sql);
            
            //return the result
            return $result;

            //end connec
            $this->db->close();
            
        }
        public function read($filter=false){

			$queryString = "SELECT u_id, Fullname, email, review FROM user_concern";
			
			if($filter){

                $queryString = $queryString." where $filter";
                
			}

			return $this->db_query($queryString);
		}

    }

?>