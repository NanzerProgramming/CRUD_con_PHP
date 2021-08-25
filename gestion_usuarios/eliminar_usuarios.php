<?php

session_start();
require_once ("../conexion.php");

/* ELIMINAR USUARIO */
if (isset($_POST["id_us"]))
{
//Se almacena en una variable el id del registro a eliminar
$id_us = $_POST['id_us'];

//Preparar la consulta
$consulta = "DELETE FROM user1 WHERE id_us=$id_us";

//Ejecutar la consulta
$resultado = mysqli_query($conexion,$consulta);

//redirigir nuevamente a la página para ver el resultado
header("location: gestion_user.php");
}

/* Cerrar la conexión */
mysqli_close($conexion); 
?>