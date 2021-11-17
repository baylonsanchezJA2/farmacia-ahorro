<?php
include('db.php');
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Numerotel=$_POST['Numero_tel'];
$Fechanacimiento=$_POST['Fecha_nacimiento'];
$Correo=$_POST['E-mail'];
session_start();
$_SESSION['Nombre']=$Nombre;


$conexion=mysqli_connect("localhost","root","","farmacia ahorro");

$consulta="SELECT*FROM empleado where Nombre='$Nombre' and Apellido='$Apellido'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

