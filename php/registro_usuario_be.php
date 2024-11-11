<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, clave) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$clave')";

    $ejecutar = mysqli_query($conexion, $query);
?>