<!--INICIO DE CODIGO PHP-->
<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nom_producto"]) and !empty($_POST["marca"]) and !empty($_POST["peso"]) and !empty($_POST["color"]) and !empty($_POST["tamaño"]) and !empty($_POST["cantidad"]) and !empty($_POST["codigo_barras"]) and !empty($_POST["vendedor"]) and !empty($_POST["comprador"])) {
        $id=$_POST["id"];
        $nom_producto=$_POST["nom_producto"];
        $marca=$_POST["marca"];
        $peso=$_POST["peso"];
        $color=$_POST["color"];
        $tamaño=$_POST["tamaño"];
        $cantidad=$_POST["cantidad"];
        $codigo_barras=$_POST["codigo_barras"];
        $vendedor=$_POST["vendedor"];
        $comprador=$_POST["comprador"];

        $sql=$conexion->query(" update inventario set nom_producto='$nom_producto', marca='$marca', peso='$peso', color='$color', tamaño='$tamaño', cantidad='$cantidad', codigo_barras='$codigo_barras', vendedor='$vendedor', comprador='$comprador' where id=$id ");
        if ($sql==1) {
            header("location:../inventarios.php");
        } else {
            echo "<div class='alert alert-danger'>ERROR AL MODIFICAR PRODUCTO</div>";
        }
        
    
    }else{
        echo "<div class='alert alert-warning'>CAMPOS VACIOS</div>";
    }
}

?>