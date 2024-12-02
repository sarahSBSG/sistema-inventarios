<!--INICO CODIGO PHP-->
<?php
//CONDICION DE QUE CON EL METODO POST AL APREGAR EL BOTON REGISTRAR SE MANDAN A LLAMAR TODO LO QUE SE REGISTRA EN LOS CUADROS DE TEXTO DE REGISTRO
if(!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nom_producto"]) and !empty($_POST["marca"]) and !empty($_POST["peso"]) and !empty($_POST["color"]) and !empty($_POST["tamaño"]) and !empty($_POST["cantidad"]) and !empty($_POST["codigo_barras"]) and !empty($_POST["vendedor"]) and !empty($_POST["comprador"])) {
        //SE CREAN LAS VARIABLES PARA QUE SE LLAMEN LOS NAME DE CADA RECUADRO CON SU METODO POST
        $nom_producto=$_POST["nom_producto"];
        $marca=$_POST["marca"];
        $peso=$_POST["peso"];
        $color=$_POST["color"];
        $tamaño=$_POST["tamaño"];
        $cantidad=$_POST["cantidad"];
        $codigo_barras=$_POST["codigo_barras"];
        $vendedor=$_POST["vendedor"];
        $comprador=$_POST["comprador"];
        //VARIABLE $SQL QUE MANDA A LLAMAR LA VARIABLE $CONEXION Y LA INSERSION DE DATOS EN LA TABLA Y LA BASE DE DATOS
        $sql = $conexion->query("INSERT INTO inventario (nom_producto, marca, peso, color, tamaño, cantidad, codigo_barras, vendedor, comprador) 
        VALUES ('$nom_producto', '$marca', '$peso', '$color', '$tamaño', '$cantidad', '$codigo_barras', '$vendedor', '$comprador')");
        //CONDICION PARA QUE SE LLAME $SQL Y SEA EN INCREMENTO Y QUE SE MANDE UN MENSAJE EN CUANDO SE REGISTRE CORRECTAMENTE LOS DATOS
        //Y SI ES EL CASO CONTRARIO UN MENSAJE DE ERROR CON ALERTAS EL MENSAJE DE COLOR YA SEA VERDE O ROJO DE CADA CONDICION 
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