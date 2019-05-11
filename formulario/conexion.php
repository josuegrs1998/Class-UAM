<?php

	$servername = "localhost";
	$username = "josue";
	$password = "password";
	

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	}

	
	$conexion=mysqli_connect('localhost','josue','password','universidad');


	
    ?>