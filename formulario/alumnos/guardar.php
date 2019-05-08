<?php
include('../conexion.php');
	
	//recuperar las variables
	$cif=$_POST['cif'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];

	//hacemos la sentencia de sql
	$sql="INSERT INTO alumnos VALUES('$cif','$nombre','$apellido')";
	//verificamos la ejecucion
	if(mysqli_query($conn, $sql)){
		header("Location: http://localhost/formulario/alumnos/alumnos.php");
		
	}
	else{
		header("Location: http://localhost/formulario/alumnos/alumnos.php");
	
		
	}
?>

