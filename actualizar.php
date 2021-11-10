<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuarios WHERE id='$id'";
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

    <title>Nosotros - ONLYMUSIC</title>
    
    
      
  </head>
  <body class="bg-white text-dark" style="background-image: url(IMG/musician-1658887_1920.jpg);background-size: cover;">
    <header class="container-fluid text-white text-center" style="background: linear-gradient(to right, rgb(39, 39, 39), rgb(0, 0, 0));">
      <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
        <h1>ONLYMUSIC</h1>
        <div class="col" style="margin-top: 10px;">
          <a href="home.php" class="btn btn-dark active" style="margin-right: 20px;">Home</a>
          <a href="nosotros.php" class="btn btn-dark active" style="margin-right: 20px;">Nosotros</a>
          <a href="login.php" class="btn btn-dark active" style="margin-right: 20px;">Registrarse</a>
          <a href="comunidad.php" class="btn btn-dark active">Comunidad</a>
        </div>
      </div>
    </header>
    
    <div>
      <div class="row mb-5">
        <div class="text-white" style="width: 690px;margin-left: 50px; margin-top: 50px;">
          <h1 style="margin-left:20px">ACTUALIZAR DATOS</h1>
          <div class="card-body" style="background: linear-gradient(to right, rgb(39, 39, 39), rgb(0, 0, 0));">
            <form action="update.php" method="POST">
                <div class="mb-4">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <div class="mb-4">
                    <label for="usuario" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario'] ?>">
                </div>
                <div class="mb-4">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion'] ?>">
                
                </div>
                <div class="mb-4 row">
                    <div class="col">
                        <label for="clave" class="form-label">Password</label>
                        <input type="password" class="form-control" name="clave" value="<?php echo $row['clave'] ?>">
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                    </div>
                </div>
                <div class="mb-4 row">
                    <div class="col">
                        <label for="cantante" class="form-label">Cantante favorito</label>
                        <input type="text" class="form-control" name="cantante" value="<?php echo $row['cantante'] ?>">
                    </div>
                    <div class="col">
                        <label for="fecha" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecha" value="<?php echo $row['fecha'] ?>">
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-dark active">Actualizar</button>
                </div>
            </form>
          </div>
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