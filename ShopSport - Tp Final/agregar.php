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


<?php
  // 1) Conexion
  // a) realizar la conexion con la bbdd
  // b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1","root","");

  // 2) Almacenamos los datos del envío POST
  // a) generar variables para cada dato a almacenar en la bbdd
  $tipo_de_prenda = $_POST ['tipo_de_prenda'];
  $marca = $_POST['marca'];
  $talle = $_POST['talle'];
  $precio = $_POST['precio'];
 // Si se desea almacenar una imagen en la base de datos usar lo siguiente: addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $descripcion = $_POST['descripcion'];
  $codigo = $_POST['codigo'];
  $link = $_POST['link'];


  // 3) Preparar la orden SQL
  // INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
  // => Ingresa dentro de la siguiente tabla los siguientes valores
  // a) generar la consulta a realizar
$consulta = "INSERT INTO ropa (id,tipo_de_prenda,marca,talle,precio,imagen,descripcion,codigo,link)
VALUES ('','$tipo_de_prenda','$marca','$talle','$precio','$imagen','$descripcion','$codigo','$link')";
  // 4) Ejecutar la orden y ingresamos datos
  mysqli_select_db($conexion,"tienda_de_ropa");
  // a) ejecutar la consulta
  mysqli_query($conexion,$consulta);
  // a) rederigir a index
  header('location: index.php');
?>
