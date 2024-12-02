<!--INICIO DE CODIGO PHP-->
<?php
//CONDICION QUE DICE QUE SI ES DIFERENTE A VACIO LLAMAMOS EL METODO POST Y SI SE PRESIONA HARA LO QUE ESTA DENTRO DEL IF
if (!empty($_POST["btnregistrar"])) {
    //CONDICION SI ES DIFERENTE A VACIO CON EL METODO EN EL QUE ESTAN QUE ES POST LLAMAMOS EL NAME DE CADA UNO DE LOS RECUADROS
    if (!empty($_POST["nom_producto"]) and !empty($_POST["marca"]) and !empty($_POST["peso"]) and !empty($_POST["color"]) and !empty($_POST["tamaño"]) and !empty($_POST["cantidad"]) and !empty($_POST["codigo_barras"]) and !empty($_POST["vendedor"]) and !empty($_POST["comprador"])) {
        //SE ALMACENAN EN UNNA VARIABLE Y SE RECOGEN CO SU METODO Y LLAMANDOLES POR SU NAME 
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
        //VARIABLE $SQL LLAMANDO A LA $CONEXION POR MEDIO DL QUERY CON LA FUNCION DE BASE DE DATOS (UPDATE) LLAMANDO LA TABLA INVENTARIO SET CON EL NAME QUE SEA IGUAL AL NUEVO VALOR
        //QUE ESTA EN LA VARIAABLE PREVIAMENTE CREADA SI EN LA BASE DE DATOS ESTA EN FORMATO TIPO ENTERO WHERE ID ES IGUAL AL ID, NO ES NECESARIO PONER LAS COMILLAS SIMPLES
        $sql=$conexion->query(" update inventario set nom_producto='$nom_producto', marca='$marca', peso='$peso', color='$color', tamaño='$tamaño', cantidad='$cantidad', codigo_barras='$codigo_barras', vendedor='$vendedor', comprador='$comprador' where id=$id ");
        //CONDICION SI $SQL = 1 SE MOFIDICO CORRECTAMENTE Y REDIRECCIONARA A LA PAGINA DE INVENTARIO
        if ($sql==1) {
            header("location:../inventarios.php");
        //SI NO SE MANDA MENSAJE DE ERROR CON UN DIV DE COLOR ROJO O AMARILLO DE CADA CONDICION
        } else {
            echo "<div class='alert alert-danger'>ERROR AL MODIFICAR PRODUCTO</div>";
        }
        
    //DE LO CONTRARIO Y ALGUNO ESTA VACIO MANDA MENSAJE DE ERROR DE QUE LOS CAMPOS ESTAN VACIOS POR MEDIO DE UN DIV PARA QUE MUESTRE EL MENSAJE DE FORMA LEGIBLE 
    }else{
        echo "<div class='alert alert-warning'>ALGUN CAMPO ESTA VACIO</div>";
    }
}

?>