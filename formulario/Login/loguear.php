<?php
include('../conexion.php');

session_start();

$usuario = $_POST['username'];
$clave = $_POST['password'];

$q = "SELECT COUNT(*) as contar from login where usuario = '$usuario' and contraseña = '$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['usuario'] = $usuario; //nuevo
    header("Location:http://localhost:8080/formulario/main/main.php");
}
else{
    echo "Datos incorrectos";
}


?>