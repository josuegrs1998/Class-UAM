<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Universidad";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	}else{
		echo "Connected successfully";
		
	}
	
	//recuperar las variables
	$cif=$_POST['cif'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];

	//hacemos la sentencia de sql
	$sql="INSERT INTO alumnos VALUES('$cif','$nombre','$apellido')";
	//verificamos la ejecucion
	if(mysqli_query($conn, $sql)){
		header("Location: http://localhost/formulario/alumnos.php");
		
	}
	else{
		header("Location: http://localhost/formulario/alumnos.php");
	
		
	}
?>

