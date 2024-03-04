<?php
/* Database connection settings */
	$servername = "bzdbetcvqtkktckfplwv-mysql.services.clever-cloud.com";
    $username = "uujrworsc3xdzbb2";		//put your phpmyadmin username.(default is "root")
    $password = "WGhBpji1KzoXdwM3fPrk";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "bzdbetcvqtkktckfplwv";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>