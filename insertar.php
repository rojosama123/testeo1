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



$sql="INSERT INTO usuarios VALUES('$id','$usuario','$email','$clave','$cantante','$direccion','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: login.php");
    
}else {
}
?>