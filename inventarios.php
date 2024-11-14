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
    <link rel="stylesheet" href="formats/css/estilos_inv.css">
</head>
<body>   

<!--HEADER PARA DEFINIR LA CABECERA DE UNA PAGINA-->
<header>
<!--DIV CON UNA CLASE LLAMADA BACK PARA COLOR DE FONDO DE LA BARRA-->
    <div class="back">
<!--DIV CON UNA CLASE LLAMADA MENU_CONTAINER PARA LA BARRA-->
        <div class="menu container">
<!--ENLACE SIGNO NUMERAL PARA SIMUILAR UN ENLACE CON UNA CLASE LLAMADA LOGO--> 
        <a href="0" class="logo"> Logo</a>

<!--INPUT PARA LA PARTE RESPONSIVA-->
        <input type="chechbox" id="menu" />
<!--LABEL QUE HACE REFERENCIA AL ID MENU, AGREGANDO UNA IMAGEN CON SU CLASE-->
        <label for="menu">
            <img src="images/menu.png" class="menu-icono" alt="">
        </label>
<!--NAVEGACION CON UNA CLASE DE NOMBRE NAVBAR Y SE CREA UNA LISTA DESORDENADA-->
        <nav class="navbar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
                 <!--BOTON PARA CERRAR SESSION--> 
                <li><a href="php/cerrar_sesion.php">Cerrar Sesion</a></li>
            </ul>
        </nav>
        </div>
    </div>    
</header>

</body>
</html>


