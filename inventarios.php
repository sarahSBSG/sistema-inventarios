
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
    <title>INVENTARIOS</title>
  <!--PAQUETE DE LA PAGINA DE BOOTSTRAPS ES UN ENLACE A UN ARCHIVO CSS DE BOOTSTRAP QUE SE CARGA DESDE UN CND (Content Delivery Network) Y DARLE EL FORMATO A LA LOS CUADROS DE TEXTO-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--SCRIP PARA PODER ELEGIR CUALQUIER ICONO DE EL KIT QUE TENEMOS EN FONTAWESOME-->
    <script src="https://kit.fontawesome.com/d8f04e9fe9.js" crossorigin="anonymous"></script>
    <!--PARA VINCULAR LOS ESTILOS DEL APARTADO ESTILOS.CSS-->
    <link rel="stylesheet" href="formats/css/estilos_inv.css">
</head>
<!--CUERPO DE LA PAGINA-->
<body>
    <!-- SCRIPT QUE LLAMA LA FUNCION ELIMINAR Y PREGUNTA ANTES SI SE LIMINA UN PRODUCTO -->  
  <script>
    function eliminar(){
      var respuesta=confirm("¿ESTAS SEGURO QUE QUIERES ELIMINAR ESTE PRODUCTO?");
      return respuesta
    }
  </script>

    <nav>
      <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
        </label>
      <a href="#" class="enlace">
        <img src="formats/images/green.png" alt="" class="logo">
      </a>
      <ul>
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a class="active" href="inventarios.php">Inventario</a></li>
    </nav>

  <!--ESTILO DE TITULO PRINCIPAL DE INVENTARIOS-->
<h3 class="text-center" style="font-size: 2.0rem; color:rgb(0, 0, 0); background-color:rgb(158, 222, 176); padding: 10px; border-radius: 5px; border: 1px solid rgb(255,255,255); margin-top: 100px;">INGRESO DE PRODUCTOS</h3>
<!--DIV DEL CONTENEDOR DEL APARTADO DEL REGISTRO DE LOS PRODUCTOS CON UNA CLASE QUE CONTIENE UN EFECTO FLUIDO EN LAS FILAS-->

<div class="container-fluid">
  <div class="row">



    <!-- PRIMER FORMULARIO -->
    <form class="col-md-6 p-3" method="POST">
    <h3 class="text-center" style="font-size: 2.0rem; color:rgb(0, 0, 0); background-color:rgb(158, 222, 176); padding: 10px; border-radius: 5px; border: 1px solid rgb(255,255,255);">LIMPIEZA</h3>
          <!-- MANDANDO A LLAMAR LOS CONTROLADORES Y CARTEPAS INCLUYENDOLOS EN ESTA CLASE -->
      <?php
      include "controlador/eliminar_productos.php";
      
      include "php_inv/conexion.php";
      include "controlador/registro_productos.php";
      ?>
          <!-- CUADRO DE TEXTOS CON SU ESTILO, NAME, TIPO DE RECUADRO Y NOMBRE QUE APARECE EN EL RECUADRO  -->
          <div class="mb-3">
        <label class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" placeholder="Nombre" name="nom_producto">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Marca</label>
        <input type="text" class="form-control" placeholder="Marca" name="marca">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Peso</label>
        <input type="text" class="form-control" placeholder="Peso" name="peso">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Color</label>
        <input type="text" class="form-control" placeholder="Color" name="color">
      </div>

      <div class="mb-3">
        <label for="tamaño" class="form-label" >Tamaño</label>
        <input type="text" class="form-control" placeholder="Tamaño" name="tamaño">
      </div>

      <div class="mb-3">
        <label for="cantidad" class="form-label" >Cantidad</label>
        <input type="text" class="form-control" placeholder="Cantidad" name="cantidad">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Codigo de Barras</label>
        <input type="text" class="form-control" placeholder="Codigo" name="codigo_barras">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Vendedor</label>
        <input type="text" class="form-control" placeholder="Vendedor" name="vendedor">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Comprador</label>
        <input type="text" class="form-control" placeholder="Comprador" name="comprador">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Fecha</label>
        <input type="date" class="form-control" placeholder="Fecha" name="fecha">
      </div>

      <div class="row d-flex justify-content-center">
        <div class="col-5">
          <button type="submit" class="btn btn-success" name="btnregistrar" value="ok">Registrar</button>
        </div>
        <div class="col-4">
          <a href="php/cerrar_sesion.php" class="btn btn-success" name="btncerrarsesion" value="ok">Cerrar Sesión</a>
        </div>
      </div>
    
    
    </form>

    
    <?php
    //CODIGO PARA MANDAR A LLAMAR LA CARPETA DE CONEXION CON LA BASE DE DATOS, Y LA VARIABLE $SQL HACIENDO UN SELECT LLAMANDO LA TABLE LLAMADA INVENTARIOS
    include "php_inv/conexion.php";
    $sql=$conexion->query(" select * from inventario ");

    



    

    ?>



    <!-- SEGUNDO FORMULARIO -->
    <form class="col-md-6 p-3" method="POST">
    <h3 class="text-center" style="font-size: 2.0rem; color:rgb(0, 0, 0); background-color:rgb(158, 222, 176); padding: 10px; border-radius: 5px; border: 1px solid rgb(255,255,255);">JARDINERIA</h3>
      
          <!-- MANDANDO A LLAMAR LOS CONTROLADORES Y CARTEPAS INCLUYENDOLOS EN ESTA CLASE -->
    <?php
      include "controlador/eliminar_productos.php";
      
      include "php_inv/conexion_jar.php";
      include "controlador/registro_productos.php";
      ?>
          <!-- CUADRO DE TEXTOS CON SU ESTILO, NAME, TIPO DE RECUADRO Y NOMBRE QUE APARECE EN EL RECUADRO  -->
      <div class="mb-3">
        <label class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" placeholder="Nombre" name="nom_productos">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Marca</label>
        <input type="text" class="form-control" placeholder="Marca" name="marcas">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Peso</label>
        <input type="text" class="form-control" placeholder="Peso" name="pesos">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Color</label>
        <input type="text" class="form-control" placeholder="Color" name="colores">
      </div>

      <div class="mb-3">
        <label for="tamaño" class="form-label" >Tamaño</label>
        <input type="text" class="form-control" placeholder="Tamaño" name="tamaños">
      </div>

      <div class="mb-3">
        <label for="cantidad" class="form-label" >Cantidad</label>
        <input type="text" class="form-control" placeholder="Cantidad" name="cantidades">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Codigo de Barras</label>
        <input type="text" class="form-control" placeholder="Codigo" name="codigos_barras">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Vendedor</label>
        <input type="text" class="form-control" placeholder="Vendedor" name="vendedores">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Comprador</label>
        <input type="text" class="form-control" placeholder="Comprador" name="compradores">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Fecha</label>
        <input type="date" class="form-control" placeholder="Fecha" name="fechas">
      </div>
    <!-- APARTADO PARA BOTONES DE REGISTRAR Y CERRAR LA SESION CON SU DISEÑO Y TIPO -->
      <div class="row d-flex justify-content-center">
        <div class="col-5">
          <button type="submit" class="btn btn-success" name="btnregistrar" value="ok">Registrar</button>
        </div>
        <div class="col-4">
          <a href="php/cerrar_sesion.php" class="btn btn-success" name="btncerrarsesion" value="ok">Cerrar Sesión</a>
        </div>
      </div>
    
    </form>

    
    <?php
    //CODIGO PARA MANDAR A LLAMAR LA CARPETA DE CONEXION CON LA BASE DE DATOS, Y LA VARIABLE $SQL HACIENDO UN SELECT LLAMANDO LA TABLE LLAMADA INVENTARIOS
    include "php_inv/conexion_jar.php";
    $sql=$conexion->query(" select * from inventario_jar ");



    
    
    
    ?>

    <!-- AQUI SE CIERRAN LOS DIVS, EL BODY Y HTML -->
  </div>
</div>



</body>
</html>


