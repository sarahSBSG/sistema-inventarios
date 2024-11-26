<?php

if(!empty($_POST["registrar"])) {
    if (!empty($_POST["nom_producto"]) and !empty($_POST["marca"]) and !empty($_POST["peso"]) and !empty($_POST["color"]) and !empty($_POST["tamaño"]) and !empty($_POST["codigo_barras"]) and !empty($_POST["vendedor"]) and !empty($_POST["comprador"])) {

        $nom_producto=$_POST["nom_producto"];
        $marca=$_POST["marca"];
        $peso=$_POST["peso"];
        $color=$_POST["color"];
        $tamaño=$_POST["tamaño"];
        $codigo_barras=$_POST["codigo_barras"];
        $vendedor=$_POST["vendedor"];
        $comprador=$_POST["comprador"];
       
        $sql=mysqli_query($conexion, " insert into inventario(nom_producto, marca, peso, color, tamaño, codigo_barras, vendedor, comprador)values('$nom_producto','$marca','$peso','$color,'$tamaño','$codigo_barras','$vendedor','$comprador') ");

        if ($sql==1) {
            echo '<div class="alert alert-success">PRODUCTO REGISTRADO CORRECTAMENTE</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR PRODUCTO</div>';

        }

    } else {
            echo '<div class="alert alert-success">ALGUNO DE LOS CAMPOS ESTA VACIO</div>';
    }
    
}

?>