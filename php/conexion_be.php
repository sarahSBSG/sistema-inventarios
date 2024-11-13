<?php
    //VARIABLE DE CONEXION CON MYSQL DE PHPMYADMIN DE FORMA LOCAL CON NOMBRE ROOT SIN CONTRASEÑA
    $conexion = mysqli_connect("localhost", "root", "", "login_register_db");
    //MENSAJE PARA VERIFICAR QUE SE CONECTABA CORRECTAMENTE LA BASE DE DATOS 
    /*
    if($conexion){
        echo 'Conectado exitosamente a la Base de Datos';
    }else{
        echo 'No se ha podido conectar a la Base de Datos';
    }
    */

?>