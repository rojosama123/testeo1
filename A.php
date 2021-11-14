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
    <link rel="stylesheet" href="Home.css">
    <title>Home - ONLYMUSIC</title>
     
      
  </head>
  <body style="background: linear-gradient(to right, rgb(39, 39, 39), rgb(0, 0, 0));">
    <header class="container-fluid text-white text-center">
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
    <div style="background-image: url(IMG/audience-828584_1920.jpg); height: 750px;" class="d-block w-100">
      <div class="row rounded">
        <div class="card" style="width: 25rem;margin-left: 150px; margin-top: 50px;">
          <div class="card-body">
            <p>LOS GUSTOS LATINOS SE ENCUENTRAN EN</p>
            <h1 class="card-title">'ONLYMUSIC'</h1>
            <p>DISFRUTA Y GUARDA TUS GUSTOS REGISTRANDOTE</p>
            <a href="http://127.0.0.1:5500/login.html" class="btn btn-danger active">MORE</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center" style="margin-top: 20px;">
      <div class="col">
        <img src="IMG/Black icon.jfif" style="border-radius: 100%;" alt="" width="50px">
        <img src="IMG/10 Instagram Tips to Improve Your Overall SEO - MindxMaster.jfif" width="50px" style="border-radius: 100%;" alt="">
        <img src="IMG/White marble.jfif" width="50px" style="border-radius: 100%;" alt="">
        <img src="IMG/Black Poncho Style Tunic.png" width="50px" style="border-radius: 100%;" alt="">
      </div>
    </div>

    <!--- LO ULTIMO -->

    <div class="container-fluid text-white" style="margin-top: 50px;">
      <div class="row">
        <div class="col" >
          <h1 style="margin-left: 120px;">LO ULTIMO</h1>
        </div>
      </div>
      <div class="row text-white text-center" style="margin-left: 50px; margin-top: 50px;">
        <div class="col">
          <div class="card" style="width: 250px; background-color: rgba(26, 25, 25);">
            <img src="IMG/prende-la-camara-rmx.jpg" alt="" class="card-img-top" height="220px">
            <div class="card-body">
              <p>8 nov, 2021</p>
              <h6>'PRENDE LA CAMARA RMX'</h6>
              <p style="margin-top: 20px;">FMK, Tiago PZK, Mau y Ricky - Prende La Cámara RMX</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 250px;background-color: rgb(26, 25, 25);">
            <img src="IMG/Que-pasa-Marcianeke.jpg" alt="" class="card-img-top" height="220px">
            <div class="card-body">
              <p>30 oct, 2021</p>
              <h6>'QUE PASA'</h6>
              <p>Marcianeke - Que Pasa</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 250px;background-color: rgb(26, 25, 25);">
            <img src="IMG/Bzrp-Music-Sessions-Vol.-46.jpg" alt="" class="card-img-top" height="220px">
            <div class="card-body">
              <p>3 nov, 2021</p>
              <h6>'BZRP Music Sessions #46'</h6>
              <p>ANUEL AA || BZRP Music Sessions #46</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 250px;background-color: rgb(26, 25, 25);">
            <img src="IMG/dictadura.jpg" alt="" class="card-img-top" height="220px">
            <div class="card-body">
              <p>28 oct, 2021</p>
              <h6>'DICTADURA'</h6>
              <p>Anuel AA - Dictadura</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--- TOP DEL MES -->

    <h1 class="text-center text-white" style="margin-top: 100px;">TOP DEL MES</h1>
    <div class="container text-white" style="margin-top: 100px;background-color: rgb(26, 25, 25);">
      <div class="row text-center" style="margin-bottom: 10px;">
        <div class="col-1">
          <h3 style="margin-top:31px;">1</h3>
        </div>
        <div class="col-3">
          <img src="IMG/AnuelAA.jpg" alt="" width="100px" height="100px" style="border-radius: 100%;">
        </div>
        <div class="col-5">
          <h5 style="margin-top:31px;">Dictadura</h5>
          <p>Anuel AA</p>
        </div>
        <div class="col">
          <h6 style="margin-top:40px;">44.646.274 visualizaciones</h6>
        </div>
      </div>
      <div class="row text-center" style="background-color: rgb(44, 44, 44);">
        <div class="col-1">
          <h3 style="margin-top:31px;">2</h3>
        </div>
        <div class="col-3">
          <img src="IMG/bts.jfif" alt="" width="100px" height="100px" style="border-radius: 100%;">
        </div>
        <div class="col-5">
          <h5 style="margin-top:31px;">My Universe</h5>
          <p>Coldplay X BTS</p>
        </div>
        <div class="col">
          <h6 style="margin-top:40px;">103.759.723 visualizaciones</h6>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-1">
          <h3 style="margin-top:31px;">3</h3>
        </div>
        <div class="col-3">
          <img src="IMG/LO SIENTO BB.jfif" alt="" width="100px" height="100px" style="border-radius: 100%;">
        </div>
        <div class="col-5">
          <h5 style="margin-top:31px;">Lo Siento BB:/</h5>
          <p>Tainy, Bad Bunny, Julieta Venegas</p>
        </div>
        <div class="col">
          <h6 style="margin-top:40px;">40.212.178 visualizaciones</h6>
        </div>
      </div>
      <div class="row text-center" style="background-color: rgb(44, 44, 44);">
        <div class="col-1">
          <h3 style="margin-top:31px;">4</h3>
        </div>
        <div class="col-3">
          <img src="IMG/CKay.jpg" alt="" width="100px" height="100px" style="border-radius: 100%;">
        </div>
        <div class="col-5">
          <h5 style="margin-top:31px;">Love Nwantiti Remix</h5>
          <p>CKAy ft. Joeboy & Kuami Eugene</p>
        </div>
        <div class="col">
          <h6 style="margin-top:40px;">115.250.484 visualizaciones</h6>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-1">
          <h3 style="margin-top:31px;">5</h3>
        </div>
        <div class="col-3">
          <img src="IMG/duki2.jfif" alt="" width="100px" height="100px" style="border-radius: 100%;">
        </div>
        <div class="col-5">
          <h5 style="margin-top:31px;">Unfollow</h5>
          <p>DUKI, Justin Quiles, Bizarrap</p>
        </div>
        <div class="col">
          <h6 style="margin-top:40px;">15.154.574 visualizaciones</h6>
        </div>
      </div>
    </div>

    <!--- COMENTARIO -->

    <h2 class="text-center text-white" style="margin-top: 100px;">¿CREES QUE NOS FALTA ALGO EN LA PAGINA? HAZNOLO SABER</h2>
    <div class="container text-white">
      <div class="row">
        <div class="col">
          <label for="" class="form-label">Nombre</label>
          <input type="text" class="form-control">
        </div>
        <div class="col">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="ejemplo123@example.com">
        </div>
      </div>
      <div class="row" style="margin-top: 50px;">
        <div class="col">
          <label for="" class="form-label">Escribenos tu opinion/comentario sobre nuestra pagina</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <button type="submit" class="btn btn-dark pr-5 pl-5 mt-5">Enviar</button>
        </div>
        
      </div>
    </div>
    

    <div class="container-fluid" style="background-color: rgb(26, 25, 25);margin-top: 50px;">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
        <p class="col-md-4 mb-0 text-white">&copy; 2021 ONLYMUSIC</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <img src="IMG/descarga (1).jpg" alt="">
        </a>
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="http://127.0.0.1:5500/index.html" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:5500/nosotros.html" class="nav-link px-2 text-muted">Nosotros</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:5500/login.html" class="nav-link px-2 text-muted">Login</a></li>
        </ul>
      </footer>
    </div>




      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
  </body>
</html>