<?php

if(isset($_POST['enviar'])){
    $id=$_POST['id'];
    $usuario=$_POST['usuario'];
    $apellido=$_POST['apellido'];
    $clave=$_POST['clave'];
    $rut=$_POST['rut'];
    $email=$_POST['email'];
    $sexo=$_POST['sexo'];
    $edad=$_POST['edad'];
    if($usuario == "" || strlen($usuario)>20){
        echo "<p class='text-danger'>* Nombre no valido (Maximo 20 caracteres)</p>";
    }
    if($apellido == "" || strlen($apellido)>20){
        echo "<p class='text-danger'>* Apellido no valido (Maximo 20 caracteres)</p>";
    }
    if($clave == "" || strlen($clave)<4){
        echo "<p class='text-danger'>* Contraseña no valido (Minimo 4 caracteres)</p>";
    }
    if($rut == "" || strlen($rut)>9){
        echo "<p class='text-danger'>* RUT/DNI no valido (Sin puntos ni guion)</p>";
    }
    if($email == "" || strpos($email, "@") === false){
        echo "<p class='text-danger'>* Correo electronico no valido (Recuerde el '@')</p>";
    }
    if($edad <6 || $edad>100){
        echo "<p class='text-danger'>* Edad no valida</p>";
    }
    

    else{
        $sql="UPDATE usuarios SET usuario='$usuario',apellido='$apellido',clave='$clave',rut='$rut',email='$email',sexo='$sexo',edad='$edad' WHERE id='$id'";
        $query=mysqli_query($con,$sql);
        if($query){
            Header("Location: comunidad.php");
        }
    }
}










?>