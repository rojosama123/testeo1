<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$clave=$_POST['clave'];
$cantante=$_POST['cantante'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fecha'];

$sql="UPDATE usuarios SET usuario='$usuario',email='$email',clave='$clave',cantante='$cantante',direccion='$direccion',fecha='$fecha' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: comunidad.php");
}
?>