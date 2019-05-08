<?php
include('../conexion.php');
	
	//recuperar las variables
	$iddocente=$_POST['iddocente'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];

	//hacemos la sentencia de sql
	$sql="INSERT INTO docentes VALUES('$iddocente','$nombre','$apellido')";
	//verificamos la ejecucion
	if(mysqli_query($conn, $sql)){
		header("Location: http://localhost/formulario/profesores/profesores.php");
			
	}
	else{
		header("Location: http://localhost/formulario/profesores/profesores.php");
	
		
	}
?>