//ACTIVAR QUE CUANDO SE DE CLICK EN EL BOTON REGISTRAR O INICIAR SESION SE HAGA LA FUNCION QUE SE CREO
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrar").addEventListener("click", registrar);
//ACTIVAR QUE CUANDO LA PAGINA CAMBIE DE TAMAÑO SE AJUSTE DE FORMA ADECUADA LLAMANDO A LA FUNCION ANCHO DE PAGINA
window.addEventListener("resize", anchoPagina);

//DECLARACION DE VARIABLES MANDANDO A LLAMAR LAS CLASS DE INDEX.PHP
var cuadro_login_register = document.querySelector(".cuadro__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var cuadro_trasero_login = document.querySelector(".cuadro__trasero-login");
var cuadro_trasero_registrar = document.querySelector(".cuadro__trasero-registrar");

//FUNCION PARA EL RESIZE DE CAMBIO DE TAMAÑO DE LA PAGINA Y ADMINISTRAR QUE SE MOSTRARA, QUE NO Y SU ORDEN
function anchoPagina(){
    if(window.innerWidth > 850){
        cuadro_trasero_login.style.display = "block";
        cuadro_trasero_registrar.style.display = "block";
    }else{
        cuadro_trasero_registrar.style.display = "block";
        cuadro_trasero_registrar.style.opacity = "1";
        cuadro_trasero_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        cuadro_login_register.style.left = "0px";
    }
}

anchoPagina();
//FUNCION INICIAR SESION LLAMANDO LOS ESTILOS DE CADA UNO PARA DETERMINAR LA OPACIDAD, 
//LA DIRECCION DONDE SE UBICA Y ADMINISTRAR QUE CUADRO SE MOSTRARA Y CUAL NO PARA EL ORDEN DE TRANSISCIONES
function iniciarSesion(){

    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        cuadro_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        cuadro_trasero_registrar.style.opacity = "1";
        cuadro_trasero_login.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        cuadro_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        cuadro_trasero_registrar.style.display = "block";
        cuadro_trasero_login.style.display = "none";
    }
}

//FUNCION REGISTRAR LLAMANDO LOS ESTILOS DE CADA UNO PARA DETERMINAR LA OPACIDAD, 
//LA DIRECCION DONDE SE UBICA Y ADMINISTRAR QUE CUADRO SE MOSTRARA Y CUAL NO PARA EL ORDEN DE TRANSISCIONES
function registrar(){

    if(window.innerWidth > 850){
        formulario_register.style.display = "block";
        cuadro_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        cuadro_trasero_registrar.style.opacity = "0";
        cuadro_trasero_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        cuadro_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        cuadro_trasero_registrar.style.display = "none";
        cuadro_trasero_login.style.display = "block";
        cuadro_trasero_login.style.opacity = "1";
    }
}