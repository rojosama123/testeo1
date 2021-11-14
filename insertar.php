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



$sql="INSERT INTO usuarios VALUES('$id','$usuario','$apellido','$clave','$rut','$email','$sexo','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: login.php");
    
}else {
}
?>