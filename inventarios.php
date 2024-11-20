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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTARIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="formats/css/estilos_inv.css">
</head>
<body>

<div class="container-fluid row">
<form class="col-4">
  <fieldset disabled>
    <legend class="text-center p-3">PRODUCTOS</legend>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Id Producto</label>
      <input type="text" class="form-control" placeholder="Id" name="Id">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nombre del Producto</label>
      <input type="text" class="form-control" placeholder="Nombre" name="nom_producto">
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
      <label for="disabledSelect" class="form-label">Tamaño</label>
      <select id="disabledSelect" class="form-select">
        <option>Tamaño</option>
      </select>
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

    <button type="submit" class="btn btn-primary">Subir</button>

<!--NAVEGACION CON UNA CLASE DE NOMBRE NAVBAR Y SE CREA UNA LISTA DESORDENADA-->

        <ul>
            <!-- BOTÓN PARA CERRAR SESIÓN -->
            <li>
                <a href="php/cerrar_sesion.php" class="boton">Cerrar Sesión</a>
            </li>
        </ul>
  </fieldset>
  
</form>
</div>
</body>
</html>
