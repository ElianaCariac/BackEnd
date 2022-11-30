<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
 mysqli_select_db($conexion,"tienda_de_ropa");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>

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
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

</head>

<body>

  <div class="page-holder">
    <!-- navbar-->
    <header class="header bg-white">
      <div class="container px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span
              class="fw-bold text-uppercase text-dark">SHOPSPORT</span></a>
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
              <li class="nav-item"><a class="nav-link" href="carrito.html"> <i
                    class="fas fa-dolly-flatbed me-1 text-gray"></i>Carrito</a></li>
              <li class="nav-item"><a class="nav-link" href="login.html"> <i
                    class="fas fa-user me-1 text-gray fw-normal"></i>Ingresar</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- Header-->
    <body>
        <?php
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $tipo_prenda=$datos["tipo_de_prenda"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $imagen=$datos['imagen'];
        $descripcion=$datos["descripcion"];
        $codigo=$datos["codigo"];
        $link=$datos["link"];

        ?>

    <h2 class="titulo-abm">Modificar</h2>
    <p class="abm">Complete los siguientes datos para que sean modificados.</p>

        <form method="POST" action="agregar.php" enctype="multipart/form-data">
        <div class="form-group">
        <label for="formGroupExampleInput">Tipo de prenda</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="tipo_de_prenda" placeholder="Ej: Remera" required>
        </div><br>
        <div class="form-group">
        <label for="formGroupExampleInput">Marca</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="marca" placeholder="Ej: Fila" required>
        </div><br>
        <div class="form-group">
        <label for="formGroupExampleInput">Talle</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="talle" placeholder="Ej: XL" required>
        </div><br>
        <div class="form-group">
        <label for="formGroupExampleInput">Precio</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="precio" placeholder="Ej: 500" required>
        </div><br>
        <div class="form-group">
        <label for="formGroupExampleInput">Descripción</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="descripcion" placeholder="Ej: Remera Fila" required>
        </div><br>
        <div class="form-group">
        <label for="formGroupExampleInput">Imagen</label>
        <input type="file" class="form-control" id="formGroupExampleInput" name="imagen" placeholder="Imagen" required>
        </div><br>
        <div class="form-group">
        <label for="formGroupExampleInput">Código</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="codigo" placeholder="Ej: 457-9584" required>
        </div><br>
        <div class="form-group">
        <label for="formGroupExampleInput">Link de pago</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="link" placeholder="Ej: https://mpago.la/2aU9Ghn" required>
        </div><br>
        <input type="submit" name="guardar_cambios" value="Guardar Cambios">
        <button type="submit" name="Cancelar" formaction="listar.php">Cancelar</button>

      </form><br><br>

        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){
            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
            $tipo_prenda=$_POST['tipo_prenda'];
            $marca=$_POST['marca'];
            $talle=$_POST['talle'];
            $precio=$_POST['precio'];
            $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name'];
            $descripcion=$_POST['descripcion'];
            $codigo=$_POST['codigo'];
            $link=$_POST['link']));


          ));
            // 3') Preparar la orden SQL
            // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
            // a) generar la consulta a realizar
             $consulta = "UPDATE ropa SET tipo_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen', descripcion='$descripcion', codigo='$codigo', link='$codigo' WHERE id=$id";
            // 4') Ejecutar la orden y actualizamos los datos
            // a) ejecutar la consulta
            mysqli_query($conexion,$consulta);
            // a) rederigir a index
            header('location: index.php');
          } ?><br><br>

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
