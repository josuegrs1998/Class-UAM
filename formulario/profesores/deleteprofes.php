<?php 
include('../conexion.php');

$iddocente = $_GET['pn'];
$query = "DELETE   from docentes where iddocente = '$iddocente'";

$data = mysqli_query($conn, $query);
if($data)
{
   
    header("Location: http://localhost/formulario/profesores/profesores.php");
}
else 
{
    echo "Sorry, ERROR";
}

?>