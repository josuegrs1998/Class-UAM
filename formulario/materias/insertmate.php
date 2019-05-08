<?php
include('../conexion.php');
	
	//recuperar las variables
	$idmateria=$_POST['idmateria'];
	$nombre=$_POST['nombre'];
	

	//hacemos la sentencia de sql
	$sql="INSERT INTO materias VALUES('$idmateria','$nombre')";
	//verificamos la ejecucion
	if(mysqli_query($conn, $sql)){
		header("Location: http://localhost/formulario/materias/materias.php");
			
	}
	else{
		header("Location: http://localhost/formulario/materias/materias.php");
		
	}
?>