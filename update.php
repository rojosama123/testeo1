<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$apellido=$_POST['apellido'];
$clave=$_POST['clave'];
$rut=$_POST['rut'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$fecha=$_POST['fecha'];

$sql="UPDATE usuarios SET usuario='$usuario',apellido='$apellido',clave='$clave',rut='$rut',email='$email',fecha='$fecha',sexo='$sexo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: comunidad.php");
}
?>