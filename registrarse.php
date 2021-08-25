<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <center>
    <h2>Registrarse</h2>
    <table margin="2">
            <form action='registrarProceso.php' method='post'>
                <div><input type='text' name='usuarios' placeholder='NOMBRE'></div><br>
                <div><input type='text' name='contrasenas' placeholder='CONTRASEÑA'></div><br>
                <div><input type='text' name='email' placeholder='EMAIL'></div><br>
                <input type='hidden' name='insertar'>
                <input type='submit' value='Agregar'>
            </form>
        </table>
    </center>  
</body>
</html>