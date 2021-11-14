<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
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
    <div class="container w-100 mt-5 rounded shadow my-5">
      <div class="row align-items-stretch">
        <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6 bg rounded">
        </div>
        <div class="col p-5 rounded-end" style="background-color: rgb(223, 223, 223);">
          <div class="font-weight-bold mt-5 text-center"><h2 >BIENVENIDO</h2></div>
          <div class="font-weight-bold text-center" style="margin-bottom:70px">INICIO DE SESION</div>
          <!--- LOGIN -->

          <form action="verificar.php" method="POST">
            <div class="mb-5">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-5">
                <label for="clave" class="form-label">Password</label>
                <input type="password" class="form-control" name="clave">
            </div>
            <div>¿Olvidó su contraseña?<a href=""> Click aquí</a> </div>
            <div>¿No tiene cuenta?<a href=""> Crear cuenta</a></div>
            <div class="text-center mt-5">
              <button type="submit" class="btn btn-dark d-block w-100">Iniciar sesion</button>
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
