<?php 
include('../conexion.php');

$idmateria = $_GET['pn'];
$query = "DELETE   from materias where idmateria = '$idmateria'";

$data = mysqli_query($conn, $query);
if($data)
{
   
    header("Location: http://localhost/formulario/materias/materias.php");
}
else 
{
    echo "Sorry, ERROR";
}

?>