<?php 
    namespace Core;
    use mysqli;
    
    class Database{
        public function __construct()
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "lab2_php2";
            // Create connection
            $conn = new mysqli($servername, $username, $password,$db_name);
            
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }         
        }
        public function hi(){
            echo "Hello everyone";
        }
    }
?>