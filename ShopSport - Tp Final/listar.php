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
                <li class="nav-item"><a class="nav-link" href="carrito.html"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Carrito</a></li>
                <li class="nav-item"><a class="nav-link" href="login.html"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Ingresar</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!-- Header-->
        <!-- Header
    <button type="submit"><a href="index.php">Inicio</a></button>
    <button type="submit"><a href="listar.php">Listar ropa</a></button>
    <button type="submit"><a href="agregar.html">Agregar ropa</a></button>-->

    <h2 class="titulo-abm">Listado de ropa</h2>
    <p class="abm">La siguiente lista muestra los datos de la ropa actualmente en stock. Puede agregar, editar y borrar artículos.</p>

    <ul class="nav justify-content-center">

          <li class="nav-item">
          <a class="nav-link" href="agregar.html">Agregar artículo nuevo</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php">Volver al inicio</a>
          </li>

      </ul><br>


    <table border="1" class="tabla-abm">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
    </tr>
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

    /*nueva forma con foreach
    while ($reg=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
      foreach ($reg as $key => $value) {
        print ("<p>$key: $value</p>\n");
      };
    };*/

    // 4) Mostrar los datos del registro
     while ($reg=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['tipo_de_prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="106px" height="116px"></td>
        
        <td><a href="modificar.php?id=<?php echo $reg['id'];?>">Editar</a></td>
        <td><a href="borrar.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
        </tr>
    <?php } ?>
  </table><br> <br>

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
