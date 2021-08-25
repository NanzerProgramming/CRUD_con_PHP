<?php

session_start();
require_once ("../conexion.php");

/* INSERTAR USUARIO */
if (isset($_POST["insertar"]))
{
//Almacenar los campos en variables
$usuarios = $_POST['usuarios'];
$contrasenas = $_POST['contrasenas'];
$email = $_POST['email'];

$consulta = "INSERT INTO user1 (usuarios,contrasenas,email)";
$consulta .= "VALUES ('$usuarios', '$contrasenas', '$email')";

//Ejecutar la consulta para guardar el registro
$resultado = mysqli_query($conexion, $consulta);

//redirigir nuevamente a la página para ver el resultado
header("location:gestion_user.php");
}

/* Cerrar la conexión */
mysqli_close($conexion); 

?>