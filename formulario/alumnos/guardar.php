<?php
include('../conexion.php');
	
	//recuperar las variables
	$cif=$_POST['cif'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];

	//hacemos la sentencia de sql
	$sql="INSERT into alumnos VALUES('$cif','$nombre','$apellido')";
	//verificamos la ejecucion
	if(mysqli_query($conexion, $sql)){
		header("Location: http://localhost:8080/formulario/alumnos/alumnos.php");
		
		

	}
	else{
		echo "Ya existe un alumno con ese numero de carnet";
	
		
	}
?>

