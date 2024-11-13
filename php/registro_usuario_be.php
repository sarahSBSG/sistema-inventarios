<?php
    //PARA DARLE ACCESO A LA CONEXION QUE SE HIZO EN CONEXION_BE.PHP
    include 'conexion_be.php';
    //VARIABLES PARA GUARDARLAS CON EL METODO POST Y NO SE ESCRIBA LEYENDA LARGA EN URL
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    //VARIABLE PARA ENCRIPTADO DE LA CONTRASEÑA CON LA FUNCION HASH 
    $clave = hash('sha512', $clave);
    
    //VARIABLE PARA INSERTAR VALORES A LA TABLA DE DATOS CON SU RESPECTIVA VARIABLE Y NAME DETERMINADO EN APARTADO REGISTRAR DEL INDEX
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, clave) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$clave')";
    
    //VARIABLE VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS DEL ARCHIVO CONEXION_BE.PHP
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    //SI ENCUANTRA UNA FILA EN LA VARIABLE VERIFICAR_CORREO ENVIARA UN MENSAJE DE ERROR Y REGRESE A PAGINA DE INICIO
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    //VARIABLE CON LA FUNCION MYSQLI_QUERY PARA PODER TENER ACCESO A VARIABLE $CONEXION 
    $validar_registro = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_completo='$nombre_completo' and correo='$correo' and usuario='$usuario' and clave='$clave' ");

    //CONDICIONAL PARA QUE CON LA FUNCION MYSQLI_NUM_ROWS SE LEA LAS FILAS,
    //EN LA VARIABLE VALIDAR_REGISTRO Y ENVIARA DE NUEVO A LA PAGINA DE INICIO SINO SE LLENAN TODOS LOS DATOS REQUERIDOS JUNTO CON UN MENSAJE DE ERROR 
    if(mysqli_num_rows($validar_registro) > 0){
        header("location: ../index.php");
        exit;
    }else{
        echo '
            <script>
                alert("Los datos estan incompletos, Porfavor llena los datos solicitados");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }

    //VARIABLE PARA EJECUTAR A LA VARIABLE $QUERY Y LLAMAR A LA $CONEXION 
    $ejecutar = mysqli_query($conexion, $query);

    //PARA VERIFICAR Y QUE LA PAGINA AVISE QUE SI SE ENVIARON LOS DATOS CORRECTAMENTE
    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente")
                window.location = "../index.php"
            </script>
            ';
    }

    //MANDAR DE NUEVO A LA PAGINA DE INICIO
    mysqli_close($conexion);
?>