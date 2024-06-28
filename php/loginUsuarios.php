<?php
session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$num_telefono = $_POST['num_telefono'];
$contrasena= $_POST['contrasena'];
$contrasena= hash('sha512', $contrasena);

$validar_login= mysqli_query($conexion, " SELECT * FROM usuariosc WHERE correo= '$correo' and  contrasena= '$contrasena' and num_telefono= '$num_telefono' ");

if(mysqli_num_rows($validar_login) > 0){

$_SESSION['usuario'] = $correo;
header("location: ../index.php");
  exit; 

}
else{
  
    echo'
    <script>
    alert("Hubo algún problema al iniciar sesión. Intentelo de nuevo más tarde o verifique los datos introducidos");
    window.location = "../registro.php";
    </script>
    ';
exit;
}




