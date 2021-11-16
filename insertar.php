<?php
include("conexion.php");
$con=conectar();



if(isset($_POST['enviar'])){
    if($usuario == "" || $apellido == "" || $clave == "" || $rut == "" || $email == "" || $sexo == "Escoger" || $edad <1){
        echo "<p class='text-danger'>* Datos erroneos o campos vacios</p>";
    }
    else{
        Header("Location: contenido.php");
    }
}

?>