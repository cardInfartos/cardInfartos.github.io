<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Por favor, debes iniciar sesión");
    window.location = "Registro.php";
    </script>';
  session_destroy();
    die();
}

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="./Images/cocoro.jpeg" type="image/x-icon">
   <link rel="stylesheet" href="./Css/normalize.css">
   <link rel="stylesheet" href="./Css/estilos.css">
<meta name="theme color" content="#2091F9">



<title>CARDIfartos-beta</title>
<meta name="title" content="CARDIfartos-beta" />
<meta name="description" content="Prototipo del servidor web para el dispositivo para detección de cardiopatías." />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://cardInfartos.github.io" />
<meta property="og:title" content="CARDIfartos-beta" />
<meta property="og:description" content="Prototipo del servidor web para el dispositivo para detección de cardiopatías." />
<meta property="og:image" content="https://cardInfartos.github.io/Images/ECG.jpg" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://cardInfartos.github.io" />
<meta property="twitter:title" content="CARDIfartos-beta" />
<meta property="twitter:description" content="Prototipo del servidor web para el dispositivo para detección de cardiopatías." />
<meta property="twitter:image" content="https://cardInfartos.github.io/Images/ECG.jpg" />

</head>
<body>
    <header class="hero">

        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Infartos</h2>
            </div>
            <ul class="nav__link nav__link--menu">
            
                <li class="nav__items">
            <a href="Inicio1.html" class="nav__links">Inicio</a>
            </li>

            <li class="nav__items">
                <a href="index.php" class="nav__links">Home</a>
            </li>
           

            <li class="nav__items">
            <a href="" class="nav__links">Historial</a>
             </li>

            <li class="nav__items">
            <a href="" class="nav__links">Registro</a>
            </li>
            <li class="nav__items">
            <a href="php/cerrar_sesion.php" class="nav__links">Cerrar Sesión</a>
             </li>

            <img src="./Images/arrow.svg" alt="" class="nav__close">

            </ul>

           <div class="nav__menu">
            <img src="./Images/more.svg" alt="" class="nav__img">
           </div>
            
        </nav>
        <section class="hero__container container">      
            <h1 class="hero_title">Bienvenido a Infartos.</h1>
            <p class="hero__paragraph">La plataforma donde puedes ver tu registro cardíaco y podrás salvar tu vida.</p>
            
        </section>
    </header>

<main>
    <section class="container about">
        
        <h2 class="subtitle">Acerca de</h2>
        <article class="about__icons">
            <img src="./Images/cocoro.svg" alt="about__icon">
           
        </article>
        <p class="about__paragraph">Un infarto es la obstrucción de sangre que nutre nuestro corazón, debido a coagulos de grasa e inclusive grasa que se acumulan en las arterias ubicadas en nuestro músculo del corazón.
            A nivel global las enfermedades cardiovasculares o cardiopatias son la principal causa de muerte en México, este dispositivo tiene como fin, reducir la tasa de mortalidad detectando oportunamente cardiopatías tales como taquicardia, bradicardia y en especial el infarto agudo al miocardio.
        </p>
        <div class="about_main">
            
        </div>
    </section>
</main>
<script src="./Js/menu.js"></script>
</body>
</html>

