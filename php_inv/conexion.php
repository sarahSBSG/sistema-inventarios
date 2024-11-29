
<!--codigo php-->
<?php
    //VARIABLE DE CONEXION CON MYSQL DE PHPMYADMIN DE FORMA LOCAL CON NOMBRE ROOT SIN CONTRASEÑA
    $conexion = mysqli_connect("localhost", "root", "", "inv_php_db");
    //VARIABLE CONEXION CON UN METODO DE LA CLASE MYSQLI QUE ESTABLECE EL CONJUNTO DE CARACTERES (charset) PARA LA CONEXION DE LA BASE DE DATOS. EN ESTE CASO, SE ESTA CONFIGURANDO A UTF-8.
    $conexion->set_charset("utf8");
    //MENSAJE PARA VERIFICAR QUE SE CONECTABA CORRECTAMENTE LA BASE DE DATOS 
    /*
    if($conexion){
        echo 'Conectado exitosamente a la Base de Datos';
    }else{
        echo 'No se ha podido conectar a la Base de Datos';
    }
    */

?>