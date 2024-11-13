<?php
    //INICIALIZAR LAS SESIONES
    session_start();
    //CONDICION PARA DETERMINAR SI EXISTE EL USUARIO Y SINO MANDAR UN MENSAJE DE ERROR
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Porfavor debes iniciar sesion");
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!--INICIO DE PAGINA INVENTARIOS CON COMANDOS BASICOS-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTARIOS</title>
</head>
<body>
    <h1>BIENVENIDO A INVENTARIOS</h1>
    <!--BOTON PARA CERRAR SESSION--> 
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>