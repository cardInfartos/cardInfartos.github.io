<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena= $_POST['contrasena'];
$num_telefono= $_POST['num_telefono'];
/*ENCRIPTAR CONTRASEÑA*/

$contrasena = hash('sha512', $contrasena);


/* ENVIAR DATOS A LA BASE DE DATOS, CONFIGURAR PARA QUE AL MOMENTO DE ACCIONAR EL BOTON TENER LOS DATOS Y ENVIARLOS*/
$query = "INSERT INTO usuariosc(nombre_completo, correo, usuario, contrasena, num_telefono) 
VALUES ('$nombre_completo', '$correo', '$usuario',  '$contrasena', '$num_telefono')"; 


/*VERIFICAR QUE EL CORREO NO SE REPITA*/ 

$verificar_correo= mysqli_query($conexion, "SELECT * FROM usuariosc WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
echo'
<script>
alert("Este Correo Ya Está Registrado. Intente con otro correo");
window.location = "../Registro.php";
</script>
';


exit();/*TERMINA EL PROGRAMA, NO SE EJECUTA LO DE ABAJO*/ 
}

$verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuariosc WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
echo'
<script>
alert("Este Usuario Ya Está Registrado. Intente con otro correo");
window.location = "../Registro.php";
</script>
';
exit();
}
/*Termina la verificacion*/

$ejecutar= mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario Almacenado existosamente :D");
    window.location = "../Registro.php";
    </script> ';

}
else{
    echo '
    <script>
    alert("está mal en algo XDD");
    window.location = "../Registro.php";
    </script> ';

}
mysqli_close($conexion);



/*Correo ni usuario
P.D Listo:DDD*/