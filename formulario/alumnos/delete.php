<?php 
include('../conexion.php');
include('../Login/iniciar.php');
$idalumno = $_GET['rn'];
$query = "DELETE   from alumnos where idalumno = '$idalumno'";

$data = mysqli_query($conexion, $query);
if($data)
{
   
    header("Location: http://localhost:8080/formulario/alumnos/alumnos.php");
}
else 
{
    header("Location: http://localhost:8080/formulario/alumnos/alumnos.php");

}

?>