<?php

//Conexión con la base de datos.
session_start();
require_once ("../conexion.php");

//Preparar la consulta para extraer todos los clientes
$sql = "SELECT * FROM user1";

//Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

//Extraer todas la filas y almacenarlas en una tabla
$table = "<table border='1' cellpadding='10'>\n";
$table .= "<tr><th>ID</th><th>USUARIOS</th><th>CONTRASEÑAS</th><th>EMAIL</th><th></th></tr>\n";
while($fila = mysqli_fetch_assoc($resultado)){
$table .= "<tr>
      <td>".$fila["id_us"]."</td>
      <td><input type='text' name='usuarios' value='".$fila["usuarios"]."'></td>
      <td><input type='text' name='contrasenas' value='".$fila["contrasenas"]."'></td>
      <td><input type='text' name='email' value='".$fila["email"]."'></td>
      
      <form method='post' action='eliminar_usuarios.php'><input type='hidden' name='id_us' value='".$fila["id_us"]."'><th><input type='submit' value='Eliminar'></th>
      </form>
      <th><a href='editar_usuarios.php'>Actualizar</a></th>   
      
   </tr>\n";
    }
$table .= "</table>\n"; 


/* Agregar usuarios */
$table2 = "<table border='1' cellpadding='4'  margin:'1px'>\n";
$table2 .= "<form action='agregar_usuarios.php' method='post'>
            <tr><th><input type='text' name='usuarios' placeholder='NOMBRE'></th><th><input type='text' name='contrasenas' placeholder='CONTRASEÑA'></th><th><input type='text' name='email' placeholder='EMAIL'></th>
            <input type='hidden' name='insertar'><th><input type='submit' value='Agregar'></th>
            
            </form>
    </tr>\n";
    
$table2 .= "</table>\n"; 
    
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Gestionar usuarios</title>
</head>
<body>

<h4><a href="../panel_control.php">PANEL DE CONTROL</a></h4>
<br>
<?php 

/* Mostrar la tabla con los registros */
echo $table; 
echo $table2;

?>

</body>
</html>

<?php

/* Ordenar los dátos */
$sql = "ALTER TABLE user1 AUTO_INCREMENT = 1";
$resultado = mysqli_query($conexion, $sql);

//$sql = "SELECT * FROM user1";
//$resultado = mysqli_query($conexion, $sql);

/* Cerrar la conexión */
mysqli_close($conexion); 
?>