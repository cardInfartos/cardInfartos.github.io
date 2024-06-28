<?php

session_start();
if(isset($_SESSION['usuario'])){
    header("location: index.php");


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Login infartos</title>

<link rel="stylesheet" href="Css/estilologin.css">
</head>

<body>

<main>


<div class="contenedor__todo">


<div class="caja__fondo">

    <div class="caja__fondo-login">
  <h3>Tienes una cuenta?</h3>
  <p>Inicia sesión para entrar</p>
  <button id="btn__Iniciar-Sesion">Inicia sesión</button>
    </div>

    <div class="caja__fondo-registro">
    <h3>Aún no tienes una cuenta?</h3>
    <p>Haz clic en "Registro" para comenzar</p>
    <button id="btn__registrarse">Registro</button>
    </div>

</div>
<!--FORMULARIO LOGIN REGISTRO-->
<div class="contenedor__login-registro">

<form action="php/loginUsuarios.php" method="POST" class="formulario__login">

    <h2>Iniciar Sesión</h2>
    <input type="text" placeholder="Correo Electronico" name="correo">
    <input type="password" placeholder="Contraseña" name="contrasena">
    <input type="number" placeholder="Número de Teléfono" name="num_telefono">
    <button>Entrar</button>

</form>

<form action="php/registro_usuario_be.php" method="POST" class="formulario__registro">
    <h2>Registrarse</h2>

    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
    <input type="text" placeholder="Correo Electrónico" name="correo">
    <input type="text" placeholder="Usuario" name="usuario" >
    <input type="password" placeholder="Contraseña" name="contrasena">
    <input type="number" placeholder="Número de Teléfono" name="num_telefono">
    <button>Registrarse</button>
</form>

</div>

</div>
</main>
<script src="Js/jeje.js"></script>    
</body>
</html>