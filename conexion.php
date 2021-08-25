<?php

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $nombrebd= 'arwebs2';

    $conexion = new mysqli($servidor, $nombreusuario, $password, $nombrebd);

    if($conexion-> connect_error){
        die("Conexión fallida: " . $conexion-> connect_error);
    }

    //echo "Conexión exitosa...";




?>