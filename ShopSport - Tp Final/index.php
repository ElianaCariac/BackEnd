<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SHOPSPORT | Tienda de Ropa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    </head>
    <body>
  
    <div class="page-holder">
      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="fw-bold text-uppercase text-dark">SHOPSPORT</span></a>
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="#">Hombre</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="#">Mujer</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="#">Niños</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="#">Contacto</a>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">               
                <li class="nav-item"><a class="nav-link" href="#"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Carrito</a></li>
                <li class="nav-item"><a class="nav-link" href="login.html"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Ingresar</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!-- Header-->
 
      <!-- HERO SECTION-->
      <div class="container">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(img/banner.jpg)">
          <div class="container py-5">
            <div class="row px-4 px-lg-5">
              <div class="col-lg-6">
                <p class="text-muted small text-uppercase mb-2">Temporada 2023</p>
                <h1 class="h2 text-uppercase mb-3">Mirá nuestra nueva colección</h1><a class="btn btn-dark" href="#.html">Ver productos</a>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- TRENDING PRODUCTS--> <br><br>

      <!-- BARRA FILTROS-->
      <ul class="nav justify-content-center">
          <li class="nav-item">
          <a class="nav-link" href="nike.php">Nike</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="adidas.php">Adidas</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="fila.php">Fila</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="puma.php">Puma</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="reebok.php">Reebok</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="buzos.php">Buzos</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="remeras.php">Remeras</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="pantalones.php">Pantalones</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="short.php">Shorts</a>
          </li>
      </ul>

      <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                  <?php
                  // 1) Conexion
                  $conexion = mysqli_connect("127.0.0.1", "root", "");
                  mysqli_select_db($conexion, "tienda_de_ropa");

                  // 2) Preparar la orden SQL
                  // Sintaxis SQL SELECT
                  // SELECT * FROM nombre_tabla
                  // => Selecciona todos los campos de la siguiente tabla
                  // SELECT campos_tabla FROM nombre_tabla
                  // => Selecciona los siguientes campos de la siguiente tabla
                  $consulta='SELECT * FROM ropa';

                  // 3) Ejecutar la orden y obtenemos los registros
                  $datos= mysqli_query($conexion, $consulta);

                  //  recorro todos los registros y genero una CARD PARA CADA UNA
                  while ($reg = mysqli_fetch_array($datos)) {?>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo ucwords($reg['marca']) ?></h5>
                                    <h6 class="fw-bolder"><?php echo ucwords($reg['descripcion']) ?></h6>
                                    <p class=""><?php echo ($reg['codigo']) ?></p>
                                    <p class="">Talle: <?php echo ($reg['talle']) ?></p>

                                    <!-- Product price-->
                                  <h2>$ <?php echo $reg['precio']; ?></h2>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

                            <!--boton con link de pago-->
                                <div class="text-center"> 
                                  <a href="<?php echo $reg['link']; ?>" class="btn btn-primary">Comprar</a>
                              </div>
                               <br>
                            </div>
                        </div>
                    </div>

                  <?php } ?>

                </div>
            </div>
        </section>

        <!-- NEWSLETTER-->
        <section class="py-5">
          <div class="container p-0">
            <div class="row gy-3">
              <div class="col-lg-6">
                <h5 class="text-uppercase">Newsletter</h5>
                <p class="text-sm text-muted mb-0">Suscribite para recibir nuestras promociones y novedades</p>
              </div>
              <div class="col-lg-6">
                <form action="#">
                  <div class="input-group">
                    <input class="form-control form-control-lg" type="email" placeholder="Ingresá tu correo electrónico" aria-describedby="button-addon2">
                    <button class="btn btn-dark" id="button-addon2" type="submit">Suscribir</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
     

      <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">SHOPSPORT - Copyright &copy; 2022 - Todos los derechos reservados.</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       
        

    </body>
</html>
