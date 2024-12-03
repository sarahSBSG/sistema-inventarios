<!--ONOCIO DE CODIGO DE PHP-->
<?php
//INCLUYPO EN ESTE ARCHIVO DE LA CARPETA PHP_INV EL ARCHIVO DE CONEXION.PHP Y PODERLO MANDAR A LLAMAR
include "../php_inv/conexion.php";
//VARIABLE ID EB DONDE ALMACENE EL ID DE LOS RODUCTOS 
$id=$_GET["id"];
//CONSULTA A LA BASE DE DATOS CON UNA VARIABLE $SQL QUE ALCANECA TODO LO SIGUIENTE LLAMANDO A LA VARIABLE CONEXION POR MEDIO DE UN 
//QUERY HACIENDO UN SELECT DE LA TABLA INVENTARIO DONDE EL ID SERA IGUAL A LA VARIABLE ID QUE RECIEN CREE
$sql=$conexion->query(" Select * from inventario where id=$id ");

?>
<!--CODIGO HTML PARA PODER COPIAR EXACTAMENTE LO MISMO DEL APARTADO DE REGISTRO DE PRODUCTOS-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--NOMBRE COMO APARECERA LA PESTAÑA DE LA PAGINA-->
    <title>MODIFICAR PRODUCTOS</title>
  <!--PAQUETE DE LA PAGINA DE BOOTSTRAPS ES UN ENLACE A UN ARCHIVO CSS DE BOOTSTRAP QUE SE CARGA DESDE UN CND (Content Delivery Network) Y DARLE EL FORMATO A LA LOS CUADROS DE TEXTO-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--MANDO A LLAMAR A LA CARPETA DE LOS ESTILOS PARA PONER DISEÑO A LA PAGINA DE MODIFICAR LOS PRODUCTOS--> 
  <link rel="stylesheet" href="../formats/css/estilos_inv_mod.css">
</head>
<body>
<!--FORM CON UNA CLASE PARA DEFINIR EL ANCHO DEL REGISTRO EN LA PAGINA Y UBICARLO DE LADO IZQUIERDO-->
<form class="col-6 p-4 m-auto" method="POST">
    <!--LEYENDA DE TEXTO ANTES DEL REGISTRO QUE SEA "MODIFICAR PRODUCTOS" Y QUE EL TEXTO ESTE CENTRADO-->
    <h3 class="text-center alert alert-secondary">MODIFICAR PRODUCTOS</h3>
    <!--INPUT CON LOS SIQUIENTES ATRIBUTOS- TIPO HIDDEN PARA QUE NO SEA VISIBLE PER SIGA EXISTIENDO, NAME DEL ID Y EL VALOR CON EL QUE RECOJO EL ID OBTENIENDOLO POR UN GET-->
    <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
    <?php
    //AQUI MANDAMOS A LLAMAR A AL ARCHIVO MODIFICAR_PRODUCTO QUE ESTA EN LA CARPETA CONTROLADOR PARA QUE AL APRETAR EL BOTON REALIZE LO QUE STA EN  ARCHIVO
    include "../controlador/modificar_producto.php";
    //PARA RECORRER TODOS LOS DATOS SE MUESTRA POR MEDIO DE UN WHILE CREANDO UNA VARIABLE LLAMADA $DATOS QUE MIENTRAS EN $SQL EXISTAN DATOS LOS ALMACENARA Y PARA MOSTRARLO AL FINAL 
    //SE ABRE EL INICIO DE CODIGO PHP
    while ($datos=$sql->fetch_object()) {?>
      <!--DIVS PARA DEFINIR LOS RECUADROS DEL REGISTRO, CON SU FORMATO, CLASE, TIPO QUE SEA DE TEXTO Y CON SU NAME DENTRO DE UN LABEL E INPUT-->
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nombre del Producto</label>
        <!--EN EL ATRIBUTO VALUE Y DENTRO DE LOS SIMBOLOS DE PHP MANDAMOS A LLAMAR LA VARIABLE $DATOS PARA MOSTRAR EL NAME DE CADA RECUADRO DE TEXTO Y ASI SUCESIVAMENTE CON TODOS LOS RECUADROS-->
        <input type="text" class="form-control" placeholder="Nombre" name="nom_producto" value="<?= $datos->nom_producto ?>">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Marca</label>
        <input type="text" class="form-control" placeholder="Marca" name="marca" value="<?= $datos->marca ?>">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Peso</label>
        <input type="text" class="form-control" placeholder="Peso" name="peso" value="<?= $datos->peso ?>">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Color</label>
        <input type="text" class="form-control" placeholder="Color" name="color" value="<?= $datos->color ?>">
      </div>

        <div class="mb-3">
        <label for="tamaño" class="form-label" >Tamaño</label>
        <input type="text" class="form-control" placeholder="Tamaño" name="tamaño" value="<?= $datos->tamaño ?>">
      </div>

      <div class="mb-3">
        <label for="cantidad" class="form-label" >Cantidad</label>
        <input type="text" class="form-control" placeholder="Cantidad" name="cantidad" value="<?= $datos->cantidad ?>">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Codigo de Barras</label>
        <input type="text" class="form-control" placeholder="Codigo" name="codigo_barras" value="<?= $datos->codigo_barras ?>">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Vendedor</label>
        <input type="text" class="form-control" placeholder="Vendedor" name="vendedor" value="<?= $datos->vendedor ?>">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Comprador</label>
        <input type="text" class="form-control" placeholder="Comprador" name="comprador" value="<?= $datos->comprador ?>">
      </div>
    <?php }

    ?>      
      <!--CONTENEDOR PARA LOS BOTONES CON SU ESTILO, Y SUS ATRIBUTOS REEDIRECCIONANDO A LA CARPETA PARA QUE REALICE LA ACTIVIDAD QUE SE LE DENOMINE-->
      <div class="row d-flex justify-content-center">
        <div class="col-5 mb-9">
        <button type="submit" class="btn btn-success" name="btnregistrar" value="ok">Modificar Producto</button>
      </div>

      <div class="col-3 mb-9">
        <a href="../inventarios.php" class="btn btn-success" name="btncerrarsesion" value="ok">Regresar</a>
      </div>
      </div>

<!--CIERRES DE LOS FORM, DIV, BODY Y HTML-->
</form>
</body>
</html>