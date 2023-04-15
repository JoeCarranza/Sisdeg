<?php
include('db.php');
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion = conn();


$consulta="SELECT*FROM usuarios where usuario='$usuario' and clave='$clave'"; //Consulta para validar que tanto el usuario como la clave existan en la base de datos
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['username'] = $usuario;
    header("location:home.php"); //Aqui es donde va a ir la pagina que creemos de los administradores
    
}else{ //Si la clave o el usuario es incorrecta lo va a rederigir a una pag que muestra un mensaje de error y lo redirige al login de nuevo
    ?>
    <?php
    include("ErrorLogin.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);