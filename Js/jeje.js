
document.getElementById("btn__registrarse").addEventListener("click", registro);
document.getElementById("btn__Iniciar-Sesion").addEventListener("click", IniciarSesion);
window.addEventListener("resize", anchoPagina);
//declarando VARIABLES 

var contenedor_login_registro = document.querySelector(".contenedor__login-registro");
var formulario_login = document.querySelector(".formulario__login");
var formulario_registro = document.querySelector(".formulario__registro");
var caja_fondo_login = document.querySelector(".caja__fondo-login");
var caja_fondo_registro = document.querySelector(".caja__fondo-registro");

function anchoPagina(){
    if(innerWidth>850){
        caja_fondo_login.style.display= "block";
        caja_fondo_registro.style.display= "block";
    }
    else{
        caja_fondo_registro.style.display= "block";
        caja_fondo_registro.style.opacity= "1";
        caja_fondo_login.style.display= "none";
        formulario_login.style.display= "block";
        formulario_registro.style.display= "none";
        contenedor_login_registro.style.left= "0px";
    }
}
anchoPagina();
function registro(){

    if(window.innerWidth > 850){
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_fondo_registro.style.opacity = "0";  
        caja_fondo_login.style.opacity = "1";
    } else{
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "none";
        caja_fondo_registro.style.display ="none";
        caja_fondo_login.style.display = "block";
        caja_fondo_login.style.opacity = "1";
    
    }
  

}
function IniciarSesion(){
    if(window.innerWidth > 850){
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_fondo_registro.style.opacity = "1";
        caja_fondo_login.style.opacity = "0";
        
    
    }
    else{
       
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_fondo_registro.style.display ="block";
        caja_fondo_login.style.display = "none";
    
    }
   
}

