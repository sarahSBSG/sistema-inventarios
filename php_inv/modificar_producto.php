<?php
include "../php_inv/conexion.php";

$id=$_GET["id"];

$sql=$conexion->query(" Select * from inventario where id=$id ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR PRODUCTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form class="col-6 p-4 m-auto" method="POST">
    <!--LEYENDA DE TEXTO ANTES DEL REGISTRO QUE SEA "PRODUCTOS"-->
      <h3 class="text-center alert alert-secondary">MODIFICAR PRODUCTOS</h3>
    <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
    <?php
    include "../controlador/modificar_producto.php";
    while ($datos=$sql->fetch_object()) {?>
      <!--DIVS PARA DEFINIR LOS RECUADROS DEL REGISTRO, CON SU FORMATO, CLASE, TIPO QUE SEA DE TEXTO Y CON SU NAME DENTRO DE UN LABEL E INPUT-->
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nombre del Producto</label>
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

      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Producto</button>
          <ul>
              <!-- BOTÓN PARA "CERRAR SESIÓN" Y "SUBIR" CON SU LINK DE REFERENCIA PARA MANDAR A UNA PAGINA O SECCION ESPEVIFICA CON TIPO DE CLASE COMO UN BOTON-->
              <li>
                  <a href="php/cerrar_sesion.php" class="boton">Cerrar Sesión</a>
              </li>
          </ul>

    <!--CIERRES DE LOS FORM, DIV, BODY Y HTML-->
  </form>
</body>
</html>