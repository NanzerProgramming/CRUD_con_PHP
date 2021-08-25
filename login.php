<?php

session_start();
require_once("conexion.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
<center>
		<h2>LOGIN</h2>
		<form method="POST" action="loginproceso.php">
		<div class="input-group">
                <i class="far fa-user"></i>
                <input type="text" placeholder="Usuario" name="user" require>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Contraseña" name="pass" require>
			</div>
            <br>
			<input type="submit" class="btn" value="Iniciar sesión" onclick="login();">
			<a href="registrarse.php">Registrarse</a>
		</form>
	</center>
	<script src="https://kit.fontawesome.com/4077c6ef6a.js" crossorigin="anonymous"></script>
</body>
</html>

<script type='text/javascript'> 

function login(){
	//alert('alerta');
}


<?php

mysqli_close($conexion);

?>

</script>