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

  <div class="container">

    <div class="card">
      <figure>
        <img src="formats/images/1.png">
      </figure>
      <div class="contenido">
        <h3>MANTENIMIENTO</h3>
        <p>Mantener su inmueble en perfectas condiciones es nuestra prioridad, así como prevenir fallas y asegurar la conservación de sus instalaciones, con el propósito de reducir costos a largo plazo, por ello, ponemos a su disposición una amplia línea de servicios para llevar a cabo mantenimientos preventivos, correctivos y trabajos especializados.</p>
        <a href="#">Leer mas...</a>
      </div>
    </div>

    <div class="card">
      <figure>
        <img src="formats/images/2.png">
      </figure>
      <div class="contenido">
        <h3>LIMPIEZA</h3>
        <p>División dedicada al servicio profesional y especializado en Limpieza Integral, el cual incorpora todas las labores necesarias para la conservación, higiene y desinfección de instalaciones.</p>
        <a href="#">Leer mas...</a>
      </div>
    </div>

    <div class="card">
      <figure>
        <img src="formats/images/3.png">
      </figure>
      <div class="contenido">
        <h3>JARDINERIA</h3>
        <p>Contamos con una amplia gama de servicios para mantener, conservar y restaurar sus áreas verdes, de este modo, podemos garantizar la salud y armonía de estos espacios destinados a realzar la belleza de su inmueble.</p>
        <a href="#">Leer mas...</a>
      </div>
    </div>

  </div>

<div class="info">
  <h3>MANTENIMIENTO</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam minima officiis atque, suscipit vel exercitationem id doloremque tempora eaque. Delectus, eligendi saepe. Iste veniam officia, perspiciatis nihil harum, inventore sequi quaerat iusto minima eos explicabo natus esse pariatur amet distinctio.</p>
  <img src="formats/images/4.png">
  <img src="formats/images/5.png">
  <img src="formats/images/6.png">
</div>

<div class="info2">
  <h3>LIMPIEZA</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam minima officiis atque, suscipit vel exercitationem id doloremque tempora eaque. Delectus, eligendi saepe. Iste veniam officia, perspiciatis nihil harum, inventore sequi quaerat iusto minima eos explicabo natus esse pariatur amet distinctio.</p>
  <img src="formats/images/7.png">
  <img src="formats/images/8.png">
  <img src="formats/images/9.png">
</div>

<div class="info3">
  <h3>JARDINERIA</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam minima officiis atque, suscipit vel exercitationem id doloremque tempora eaque. Delectus, eligendi saepe. Iste veniam officia, perspiciatis nihil harum, inventore sequi quaerat iusto minima eos explicabo natus esse pariatur amet distinctio.</p>
  <img src="formats/images/10.png">
  <img src="formats/images/11.png">
  <img src="formats/images/12.png">
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");
    const infoSections = document.querySelectorAll(".info, .info2, .info3");

    cards.forEach((card, index) => {
      const button = card.querySelector("a");
      button.addEventListener("click", (e) => {
        e.preventDefault();

        // Ocultar todas las secciones de información
        infoSections.forEach(section => section.classList.remove("active"));

        // Mostrar la sección correspondiente al índice de la tarjeta
        infoSections[index].classList.add("active");
      });
    });
  });
</script>

</body>
</html>