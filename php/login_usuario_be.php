<?php
    //INICIALIZAR LAS SESIONES
    session_start();
    //INCLUYE ENL ARCHIVO DE ORIGEN CONEXION_BE.PHP
    include 'conexion_be.php';
    //VARIABLE QUE GUARDA LOS VALORES CON SU NAME PREDETERMINADO CON UN METODO POST
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    //VARIABLE PARA MANDAR A LLAMAR AL ALGORITMO SHA152 Y LEA LAS CONTRASEÑAS ENCRIPTADAS
    $clave = hash('sha512', $clave);
    //VARIABLE CON LA FUNCION MYSQLI_QUERY PARA PODER TENER ACCESO A VARIABLE $CONEXION 
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and clave='$clave' ");
    //CONDICIONAL PARA QUE CON LA FUNCION MYSQLI_NUM_ROWS SE LEA LA INFORMACION INGRESADA POR FILAS,
    //SI ENCUENTRA UNA FILA EN LA VARIABLE VALIDAR_LOGIN ENVIARA A LA NUEVA PAGINA INVENTARIOS Y SINO,
    //MANDARA UN MENSAJE DE ERROR Y REGRESE A PAGINA DE INICIO
    if(mysqli_num_rows($validar_login) > 0){
        //VARIABLE SESSION QUE ALMACENA LA VARIABLE USUARIO DEL CORREO DEL USUARIO QUE HA INICIADO LA SESION 
        $_SESSION['usuario'] = $correo;
        header("location: ../inventarios.php");
        exit;
    }else{
        echo '
            <script>
                alert("FALTA DE DATOS O ESTAN INCORRECTOS, PORFAVOR VERIFIQUE LOS DATOS INGRESADOS");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
?>