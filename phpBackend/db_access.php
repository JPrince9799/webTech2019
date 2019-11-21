<?php
/**
 * This is the class that help with the connection and manipulation of the database
 * @version 1.1
 * @author Joseph Prince - Agbodjan
 */

require("setDB.php");

    class db_access{

        //properties
        protected $db = null;
        private $results = null;

        function __construct(){
            
            //call the connection function
            $this->db_connect();
        
        }

		function __destruct(){
            
            if($this->db){
                
                //close the connection
                $this->db->close();
            
            }
        
        }

        //connect
        /**
        *Database connection
        *@return bolean
        **/
        function db_connect(){
            
            //connection
            $this->db = new mysqli(DATABASE, USERNAME, PASSWORD, DB_NAME);
            
            //test the connection
            if (mysqli_connect_errno()) {

                
            
                return false;
            
            }
            
            else{

                
            
                return true;
            
            }
        
        }
        

        //execute a query
        /**
        *Query the Database
        *@param takes a connection and sql query
        *@return bolean
        **/
        function db_query($sqlQuery){
            
            if (!$this->db_connect()) {
            
                return false;
            
            } 
            
            elseif ($this->db==null) {
            
                return false;
            
            }

            //run query 
            $this->results = mysqli_query($this->db, $sqlQuery);
            
            if ($this->results == false) {
            
                return false;
            
            }
            
            else{
            
                return true;
            
            }
            
        }

        //fetch data
        /**
        *get select data
        *@return a record
        **/
        function db_fetch(){
            
            //check if result was set
            if ($this->results == null) {
            
                return false;
            
            }
            
            elseif ($this->results == false) {
            
                return false;
            
            }
            
            //return a record
            return mysqli_fetch_assoc($this->results);

    }
}

?>