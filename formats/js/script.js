document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrar").addEventListener("click", registrar);
window.addEventListener("resize", anchoPagina);

//DECLARACION DE VARIABLES
var cuadro_login_register = document.querySelector(".cuadro__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var cuadro_trasero_login = document.querySelector(".cuadro__trasero-login");
var cuadro_trasero_registrar = document.querySelector(".cuadro__trasero-registrar");

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