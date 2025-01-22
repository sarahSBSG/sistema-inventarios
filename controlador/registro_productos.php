<!--INICO CODIGO PHP-->
<?php
//CONDICION DE QUE CON EL METODO POST AL APREGAR EL BOTON REGISTRAR SE MANDAN A LLAMAR TODO LO QUE SE REGISTRA EN LOS CUADROS DE TEXTO DE REGISTRO
if(!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nom_productos"]) and !empty($_POST["marcas"]) and !empty($_POST["pesos"]) and !empty($_POST["colores"]) and !empty($_POST["tamaños"]) and !empty($_POST["cantidades"]) and !empty($_POST["codigos_barras"]) and !empty($_POST["vendedores"]) and !empty($_POST["compradores"]) and !empty($_POST["fechas"])) {
        //SE CREAN LAS VARIABLES PARA QUE SE LLAMEN LOS NAME DE CADA RECUADRO CON SU METODO POST
        $nom_productos=$_POST["nom_productos"];
        $marcas=$_POST["marcas"];
        $pesos=$_POST["pesos"];
        $colores=$_POST["colores"];
        $tamaños=$_POST["tamaños"];
        $cantidades=$_POST["cantidades"];
        $codigos_barras=$_POST["codigos_barras"];
        $vendedores=$_POST["vendedores"];
        $compradores=$_POST["compradores"];
        $fechas=$_POST["fechas"];
        //VARIABLE $SQL QUE MANDA A LLAMAR LA VARIABLE $CONEXION Y LA INSERSION DE DATOS EN LA TABLA Y LA BASE DE DATOS
        $sql = $conexion_jar->query("INSERT INTO inventario_jar (nom_productos, marcas, pesos, colores, tamaños, cantidades, codigos_barras, vendedores, compradores, fechas) 
        VALUES ('$nom_productos', '$marcas', '$pesos', '$colores', '$tamaños', '$cantidades', '$codigos_barras', '$vendedores', '$compradores', '$fechas')");
        //CONDICION PARA QUE SE LLAME $SQL Y SEA EN INCREMENTO Y QUE SE MANDE UN MENSAJE EN CUANDO SE REGISTRE CORRECTAMENTE LOS DATOS
        //Y SI ES EL CASO CONTRARIO UN MENSAJE DE ERROR CON ALERTAS EL MENSAJE DE COLOR YA SEA VERDE O ROJO DE CADA CONDICION 
        if ($sql==1) {
            echo '<div class="alert alert-primary">PRODUCTO REGISTRADO CORRECTAMENTE</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR PRODUCTO</div>';

        }

    } else {
            echo '<div class="alert alert-danger">ALGUNO DE LOS CAMPOS ESTA VACIO</div>';
    }

}

?>

<!-- SCRIPT PARA OCULTAR ALERTAS AUTOMÁTICAMENTE EN 3 SEGUNDOS-->
<script>
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => alert.style.display = 'none');
    }, 3000);
</script>