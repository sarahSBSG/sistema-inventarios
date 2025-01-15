<!--INICIO DE CODIGO PHP-->
<?php
    //INICIALIZAR LAS SESIONES
    session_start();
    //CONDICION PARA DETERMINAR SI EXISTE LA SESION Y MANDAR A LA UBICACION INVENTARIOS.PHP
    if(isset($_SESSION['usuario'])){
        header("location: inventarios.php");
    }

?>

<!--ETIQUETAS BASICAS PARA EL INICIO DE PAGINA WEB-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--NOMBRE DE COMO APARECERA LA PAGINA WEB-->
    <title>GREEN</title>
<!--PARA VINCULAR LOS ESTILOS DEL APARTADO ESTILOS.CSS-->
    <link rel="stylesheet" href="formats/css/estilos_recovery.css">
</head>
<!--CUERPO DE LA PAGINA-->
<body>
<!--DIV PARA EL CONTENEDOR DE PAGINA DE INICIO-->
<div class="container">
<!--DIV PARA ESTILOS DEL DISEÑO DE MOVIMIENTOS DE BURBUJAS PAGINA INICIO-->
    <div class="bubbles">
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
    </div>

<!--CONTENEDOR DE INFORMACION, BOTONES, TIPO DE DATOS QUE TENDRA CADA CUADRO DE TEXTO Y SU NAME-->
    <div class="contenedor__todo">
        <div class="cuadro__trasero">
            <div class="cuadro__trasero-login">
            </div>
        </div>
            <!--FORMULARIO DE LOGIN  REGISTER-->
            <div class="cuadro__login-register">
                <!--LOGIN-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Recuperar contraseña</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <a href="recovery.php">¿Olvidaste la contraseña?</a>
                    <button>Enviar email</button>
                </form>
            </div>
    </div>
</div>
<!--SCRIPT PARA MANDAR A LLAMAR EL ARCHIVO SCRIPT.JS-->
<script src="formats/js/script.js"></script>

</body>
</html>