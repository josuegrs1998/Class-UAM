<?php 
include('../conexion.php');

$idmateria = $_GET['pn'];
$idalumno = $_GET['sc'];

$query = "DELETE   from materias_alumnos where idmateria = '$idmateria' and idalumno = '$idalumno'";

$data = mysqli_query($conn, $query);
if($data)
{
   
    header("Location: http://localhost/formulario/matricula/matricula.php");
}
else 
{
    echo "Sorry, ERROR";
}

?>