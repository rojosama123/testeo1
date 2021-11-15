<?php

include("conexion.php");
$con=conectar();

if($_REQUEST['sexo'] == 0){
    $sexo= 'Masculino';
}
else if($_REQUEST['sexo'] = 1){
    $sexo= 'Femenino';
}
else if($_REQUEST['sexo'] = 2){
    $sexo= 'Otros';
}

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$apellido=$_POST['apellido'];
$clave=$_POST['clave'];
$rut=$_POST['rut'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];


$sql="UPDATE usuarios SET usuario='$usuario',apellido='$apellido',clave='$clave',rut='$rut',email='$email',sexo='$sexo',edad='$edad' WHERE id='$id'";
$query=mysqli_query($con,$sql);



if($query){
    Header("Location: comunidad.php");
}
?>