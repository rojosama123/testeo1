<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);


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
  <body class="bg-white" style="background-image: url(IMG/black-and-white-2600809_1920.jpg);background-size: cover;">
    <header class="container-fluid text-white text-center" style="background: linear-gradient(to right, rgb(39, 39, 39), rgb(0, 0, 0));">
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
    
    <div class="container-fluid text-white text-center">
        <h1 style="margin-top:50px;margin-bottom:50px" class="text-center">¡NUESTRA COMUNIDAD!</h1>
        <div class="row">
            <div class="col text-center">
                <table class="table text-white text-center shadow rounded" >
                    <thead style="background-color:rgb(39, 39, 39);">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>RUT/DNI</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr style="background: linear-gradient(to right, rgb(39, 39, 39), rgb(0, 0, 0));">
                                <th><?php  echo $row['usuario']?></th>
                                <th><?php  echo $row['apellido']?></th>   
                                <th><?php  echo $row['email']?></th>
                                <th><?php  echo $row['rut']?></th>
                                <th><?php  echo $row['sexo']?></th>
                                <th><?php  echo $row['edad']?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['id']; ?>" class="btn btn-dark">Actualizar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a></th> 
                                                                    
                            </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
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