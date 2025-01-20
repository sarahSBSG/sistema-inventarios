<?php
    //INICIALIZAR LAS SESIONES
    session_start();
    //CONDICION PARA DETERMINAR SI EXISTE EL USUARIO Y SINO MANDAR UN MENSAJE DE ERROR
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("PORFAVOR, DEBES INICIAR SESION");
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!--ETIQUETAS BASICAS PARA EL INICIO DE PAGINA WEB-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--NOMBRE DE COMO APARECERA LA PAGINA WEB-->
    <title>INICIO</title>
  <!--PAQUETE DE LA PAGINA DE BOOTSTRAPS ES UN ENLACE A UN ARCHIVO CSS DE BOOTSTRAP QUE SE CARGA DESDE UN CND (Content Delivery Network) Y DARLE EL FORMATO A LA LOS CUADROS DE TEXTO-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--SCRIP PARA PODER ELEGIR CUALQUIER ICONO DE EL KIT QUE TENEMOS EN FONTAWESOME-->
    <script src="https://kit.fontawesome.com/d8f04e9fe9.js" crossorigin="anonymous"></script>
    <!--PARA VINCULAR LOS ESTILOS DEL APARTADO ESTILOS.CSS-->
    <link rel="stylesheet" href="formats/css/estilos_barra.css">
    <link rel="stylesheet" href="formats/css/estilos_inicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
</head>
<!--CUERPO DE LA PAGINA-->
<body>

    <nav>
      <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
        </label>
      <a href="#" class="enlace">
        <img src="formats/images/green.png" alt="" class="logo">
      </a>
      <ul>
        <li><a class="active" href="inicio.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="inventarios.php">Inventario</a></li>
    </nav>

<div class="contenedor">
  <div class="cuadro">
    <div class="cuadro_imagen" style="--i:url(../images/1.png)">
      <h6>MANTENIMIENTO</h6>
    </div>
    <div class="cuadro_info">
      <p class="title">MANTENIMIENTO</p>
      <div class="description">
        <div class="item">
          <i class="fa-solid fa-screwdriver-wrench"></i>
        </div>
        <div class="item">
          <i class="fa-solid fa-toolbox"></i>
        </div>
      </div>

      <div class="content">
        <p class="title">¿De que trata?</p>
        <li>Mantener su inmueble en perfectas condiciones es nuestra prioridad, así como prevenir fallas y asegurar la conservación de sus instalaciones, con el propósito de reducir costos a largo plazo, por ello, ponemos a su disposición una amplia línea de servicios para llevar a cabo mantenimientos preventivos, correctivos y trabajos especializados.</li>
      </div>

      <div class="action">
        <a href="#" class="btn">Ver mas..</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>