<?php  
	//Conexión con la base de datos.

session_start();
require_once ("../conexion.php");

//Preparar la consulta para extraer todos los clientes
$consulta = "SELECT * FROM user1";

//Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

//Extraer todas la filas y almacenarlas en una tabla
$table = "<table border='1' cellpadding='10'>\n";
$table .= "<tr><th>ID</th><th>USUARIOS</th><th>CONTRASEÑAS</th><th>EMAIL</th></tr>\n";
while($fila = mysqli_fetch_assoc($resultado)){
$table .= "<tr>
      <td>".$fila["id_us"]."</td>
      <td>".$fila["usuarios"]."</td>
      <td>".$fila["contrasenas"]."</td>
      <td>".$fila["email"]."</td>
     
   </tr>\n";
    }
$table .= "</table>\n";


$table2 = "<h3>Editar usuario:</h3>";
$table2 .= "<form method='POST' action=''>";
$table2 .= "<table>
				<tr><td>usuario: </td><td><input type 'text' name='usuarios' value=''></td></tr>
				<tr><td>contrasenas: </td><td><input type='text' name='contrasenas' value=''></td></tr>
				<tr><td>Email: </td><td><input type='text' name='email' value=''></td></tr>
				<tr><input type='hidden' name='usuarios'><input type='hidden' name='id_us' value=''>
				<td colspan='2'><input type='submit' value='EDITAR USUARIO'></td></tr>
			</table>
		</form>";

	//print_r($_POST);
	if (isset($_POST['id_us'])) {
		
	
	$id_us = $_POST['id_us'];
	$usuarios = $_POST['usuarios'];
	$contrasenas = $_POST['contrasenas'];
	$email = $_POST['email'];
	
	// $sentencia = ("UPDATE user1 SET usuarios = ?, contrasenas = ?, email = ? WHERE id_us");
	// $resultado = ([$usuarios,$contrasenas,$email,$id_us]);
$consulta = "UPDATE user1 
SET usuarios='$usuarios',contrasena='$contrasenas',email='$email',WHERE id_us=$id_us";
//Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);
	}
	if ($resultado === TRUE) {
		header('Location: editar.php');
	}else{
		echo "Error";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuarios</title>
	<meta charset="utf-8">
</head>
<body>
<h4><a href="gestion_user.php">GESTION DE USUARIOS</a></h4>
<br>
	<?php
	echo $table;
	echo $table2;
	?>
	
</body>
</html>

<?php

//Preparar la consulta para extraer todos los clientes
$consulta = "SELECT * FROM user1";

//Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

/* Cerrar la conexión */
mysqli_close($conexion); 

?>
