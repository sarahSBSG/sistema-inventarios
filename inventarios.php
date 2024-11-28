
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
<!--ETIQUETAS BASICAS PARA EL INICIO DE PAGINA WEB-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--NOMBRE DE COMO APARECERA LA PAGINA WEB-->
    <title>INVENTARIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--SCRIP PARA PODER ELEGIR CUALQUIER ICONO DE EL KIT QUE TENEMOS EN FONTAWESOME-->
    <script src="https://kit.fontawesome.com/d8f04e9fe9.js" crossorigin="anonymous"></script>
    <!--PARA VINCULAR LOS ESTILOS DEL APARTADO ESTILOS.CSS-->
    <link rel="stylesheet" href="formats/css/estilos_inv.css">
</head>
<!--CUERPO DE LA PAGINA-->
<body>
  <!--DIV DEL CONTENEDOR DEL APARTADO DEL REGISTRO DE LOS PRODUCTOS CON UNA CLASE QUE CONTIENE UN EFECTO FLUIDO EN LAS FILAS-->
<div class="container-fluid row">
    <!--FORM CON UNA CLASE PARA DEFINIR EL ANCHO DEL REGISTRO EN LA PAGINA Y UBICARLO DE LADO IZQUIERDO-->
  <form class="col-3" method="POST">
    <!--LEYENDA DE TEXTO ANTES DEL REGISTRO QUE SEA "PRODUCTOS"-->
      <h3 class="text-center p-4">PRODUCTOS</h3>
      <?php
      include "php_inv/conexion.php";
      include "controlador/registro_productos.php";
      ?>
  <!--DIVS PARA DEFINIR LOS RECUADROS DEL REGISTRO, CON SU FORMATO, CLASE, TIPO QUE SEA DE TEXTO Y CON SU NAME DENTRO DE UN LABEL E INPUT-->
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nombre del Producto</label>
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
  <!--DIV QUE CONTIENE LO MISMO QUE LOS ANTERIORES PERO EN FORMA DE SELECCION-->
        <div class="mb-3">
        <label for="tamaño" class="form-label" >Tamaño</label>
        <input type="text" class="form-control" placeholder="Tamaño" name="tamaño">
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
      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
          <ul>
              <!-- BOTÓN PARA "CERRAR SESIÓN" Y "SUBIR" CON SU LINK DE REFERENCIA PARA MANDAR A UNA PAGINA O SECCION ESPEVIFICA CON TIPO DE CLASE COMO UN BOTON-->
              <li>
                  <a href="php/cerrar_sesion.php" class="boton">Cerrar Sesión</a>
              </li>
          </ul>

    <!--CIERRES DE LOS FORM, DIV, BODY Y HTML-->
  </form>
  <!--APARTADO DE ESTILO Y TAMAÑO DE LA TABLA DE REGISTRO DE INVENTARIOS Y CON SU NOMBRE EN CADA COLUMNA-->
  <div class="col-9 p-3">
    <!--ESTILO DE TABLA PARA QUE AL PASAR EL MOUSSE SE OBSCUREZCA CADA FILA-->
  <table class="table table-hover">
    <!--HILO DE DATOS QUE CONTIENE LA TABLA-->
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">MARCA</th>
      <th scope="col">PESO</th>
      <th scope="col">COLOR</th>
      <th scope="col">TAMAÑO</th>
      <th scope="col">CODIGO</th>
      <th scope="col">VENDEDOR</th>
      <th scope="col">COMPRADOR</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <!--CODIGO PHP-->
    <?php
    //CODIGO PARA MANDAR A LLAMAR LA CARPETA DE CONEXION CON LA BASE DE DATOS, Y LA VARIABLE $SQL HACIENDO UN SELECT LLAMANDO LA TABLE LLAMADA INVENTARIOS
    include "php_inv/conexion.php";
    $sql=$conexion->query(" select * from inventario ");
    //FUNCION WHILE(SIGNIFICA QUE MIENTRAS SE CUMPLE ESTA INSTRUCCION SE CUMPLIRA LO QUE SE DESIGNO Y EN ESTA PARTE ASIGNA EL OBJETO DEVUELTO POR fetch_object() A LA VARIABLE $datos)
    while($datos=$sql->fetch_object()){ ?>
    <tr>
      <td><?= $datos-> Id?></td>
      <td><?= $datos-> nom_producto?></td>
      <td><?= $datos-> marca?></td>
      <td><?= $datos-> peso?></td>
      <td><?= $datos-> color?></td>
      <td><?= $datos-> tamaño?></td>
      <td><?= $datos-> codigo_barras?></td>
      <td><?= $datos-> vendedor?></td>
      <td><?= $datos-> comprador?></td>
      <!--ETIQUETA EN DONDE SE LE ASIGNA UN ICONO Y FORMATO A LOS BOTONES DE CADA PRODUCTO AGREGADO PARA EDITAR Y BORRAR-->
      <td>
        <a href="" class="btn btn-small btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
    <?php }
    ?>

    <!--CIERRRE DE ETIQUETAS (DIVS, TBODY, TABLE, BODY Y HTML)-->
  </tbody>
</table>
  </div>

</div>
</body>
</html>

