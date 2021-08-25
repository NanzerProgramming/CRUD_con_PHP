<?php

session_start();
require_once("conexion.php");

$user=$_POST['user'];
$pass=$_POST['pass'];
//print_r($_POST);




    $validarLogin = mysqli_query($conexion, "SELECT * FROM user1 WHERE usuarios='$user' AND contrasenas='$pass'");

    if(mysqli_num_rows($validarLogin) > 0) {
        $_SESSION['usuario'] = $usuario;
        header('Location: panel_control.php');
        exit;
    }else{
        print_r("bienvenido");
        echo '<script>
            alert("Datos incorrectos, verifiquelos por favor");
            window.location = "login.php";
        </script>';
        exit;
    }
    


    
    
    
    
    mysqli_close($conexion);


?>


// $query = "SELECT * FROM user1 WHERE user_name='$user' AND password='$pass'";
// $sql = mysqli_query($conexion,$query);
// $row = mysqli_fetch_array($sql);
// if(mysqli_num_rows!=1){
// echo "USUARIO NO VALIDO";
// }else{
// $cUsuario = row[name];
 
// echo "Bienvenid@ $cUsuario";
// }
//$sql=$conexion->query("select * from user1");


/*$consulta = "SELECT * FROM user1";

if ($resultado = mysqli_query($conexion, $consulta)) {

	while ($fila = mysqli_fetch_row($resultado)) {
		printf ("datos: ", $fila[0], $fila[1]);


		printf()
	}*/
	










    <!-- while ($fila = mysqli_fetch_row($resultado)) {
        printf ("%s (%s)\n", $fila[0], $fila[1]);
    } -->









