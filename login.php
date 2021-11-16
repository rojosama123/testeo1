<?php
    if(isset($_POST['enviar'])){
      $usuario=$_POST['usuario'];
      $apellido=$_POST['apellido'];
      $clave=$_POST['clave'];
      $rut=$_POST['rut'];
      $email=$_POST['email'];
      $sexo=$_POST['sexo'];
      $edad=$_POST['edad'];
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login - ONLYMUSIC</title>

    <style>
      .bg{
        background-image: url(IMG/piano-4089731_1920.jpg);
        background-position: center center;
        background-size: cover;
      }
    </style>
     

  </head>
  <body style="background: linear-gradient(to right, rgb(39, 39, 39), rgb(0, 0, 0));">
  <header class="container-fluid text-white text-center">
      <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
        <h1>ONLYMUSIC</h1>
        <div class="col" style="margin-top: 10px;">
          <a href="contenido.php" class="btn btn-dark active" style="margin-right: 20px;">Home</a>
          <a href="nosotros.php" class="btn btn-dark active" style="margin-right: 20px;">Nosotros</a>
          <a href="login.php" class="btn btn-dark active" style="margin-right: 20px;">Registrarse</a>
          <a href="comunidad.php" class="btn btn-dark active">Comunidad</a>
        </div>
      </div>
    </header>
    <div class="container w-100 mt-5 rounded shadow my-5">
      <div class="row align-items-stretch">
        <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6 bg rounded">
        </div>
        <div class="col p-5 rounded-end" style="background-color: rgb(223, 223, 223);">
          <div class="font-weight-bold mt-5 text-center"><h2 >BIENVENIDO</h2></div>
          <div class="font-weight-bold text-center">Registrese por porfavor</div>
          <!--- LOGIN -->

          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <div class="mb-4">
              <label for="usuario" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="usuario" value="<?php if(isset($usuario)) echo $usuario?>">
            </div>
            <div class="mb-4">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" name="apellido" value="<?php if(isset($apellido)) echo $apellido?>">
            </div>
            <div class="mb-4">
              <label for="clave" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="clave">
            </div>
            <div class="mb-4 row">
              <div class="col">
                <label for="rut" class="form-label">RUT/DNI</label>
                <input type="text" class="form-control" name="rut" value="<?php if(isset($rut)) echo $rut?>">
              </div>
              <div class="col">
                <label for="email" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="email" value="<?php if(isset($email)) echo $email?>">
              </div>
            </div>
            <div class="mb-4 row">
              <div class="col">
                <div class="form-group">
                  <label for="sexo">Sexo</label>
                  <select name="sexo" class="form-control">
                    <option selected>Escoger</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otros">Otros</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" name="edad" value="<?php if(isset($edad)) echo $edad?>">
              </div>
              
            </div>
            <?php
            include("insertar.php");
            ?>
            <div class="text-center mt-5">
              <button type="submit" class="btn btn-dark" name="enviar">Registrarse</button>
            </div>
            
          </form>

          
        </div>
      </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
       //$('.carousel').carousel();
    </script>  
      
  </body>
</html>
