<?php
/* Database connection settings */
	$servername = "localhost";
    $username = "rfidAdmin";		//put your phpmyadmin username.(default is "root")
    $password = "THisIS@123Secure";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "IndividualAttendanceRecord";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>