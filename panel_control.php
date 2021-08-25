<?php

session_start();
require_once("conexion.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Panel de Control</title>
	<meta charset="utf-8">
</head>
<body>
	<div aling = "right">
		<p><a href="cerrar.php">Cerrar Sesión</a></p>
	</div>
        
        
    <h3><a href="gestion_usuarios/gestion_user.php">GESTION DE USUARIOS</a></h3>
    <h3><a href="gestion_productos/gestion_prod.php">GESTION DE PRODUCTOS</a></h3>
			
</body>
</html>
	
<?php

mysqli_close($conexion);

?>