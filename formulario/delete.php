<?php 
include ("guardar.php");

$idalumno = $_GET['rn'];
$query = "DELETE   from alumnos where idalumno = '$idalumno'";


$data = mysqli_query($conn, $query);
if($data)
{
   
    header("Location: http://localhost/formulario/alumnos.php");
}
else 
{
    echo "Sorry, ERROR";
}





?>