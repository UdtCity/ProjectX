<?php

    session_start();

	class Connection {
        
		public static function openConnection() {
            
            $host = "mysql:host=localhost;dbname=projectx";
            $user = "root";
            $pass = "";
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
            try {
			  $conn = new PDO($host, $user, $pass, $options);
			  return $conn;
			}
			catch (PDOException $e) {
			  echo "There is some problem in connection: " . $e->getMessage();
			}
		}
        
		public static function closeConnection() {
		  $conn = null;
		}
        
	}
?>