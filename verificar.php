<?php

include("conexion.php");
$con=conectar();

$email=$_POST['email'];
$clave=$_POST['clave'];

$sql="SELECT clave FROM usuarios WHERE email='$email'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

if($query){
    if($row['clave'] != $clave){
        Header("Location: home.php");
        echo "<p>Datos erroneos</p>";
    }
    else{
        Header("Location: contenido.php");
    }
}




?>