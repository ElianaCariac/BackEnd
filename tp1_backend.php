<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 1</title>
</head>
<body>

<h1>Trabajo Práctico 1</h1>
<h2>Eliana Cariac</h2>

<h3>1- Imprima por pantalla: “Hola mundo”.</h3>

    <?php
    echo "Hola mundo";
    ?>

<br><hr>

<h3>2 - Cargue en una variable la cadena de caracteres “Hola mundo” y luego imprima por pantalla.</h3>

    <?php
    $mensaje = "Hola mundo";
    echo $mensaje;
    ?>

<br><hr>

<h3>3 - Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera.</h3>

    <?php
    $numero1 = 50;
    $numero2 = 20;

    $suma = $numero1 + $numero2;
    echo "Si sumamos $numero1 + $numero2 nos da $suma.";
    echo "<br>";

    $resta = $numero1 - $numero2;
    echo "Si restamos $numero1 - $numero2 nos da $resta.";
    echo "<br>";

    $multiplicacion = $numero1 * $numero2;
    echo "Si multiplicamos $numero1 x $numero2 nos da $multiplicacion.";
    echo "<br>";

    $division = $numero1 / $numero2;
    echo "Si dividimos $numero1 / $numero2 nos da $division, ";

    $resto = $numero1 % $numero2;
    echo "y el resto de dicha división es de $resto.";
    ?>

<br><hr>

<h3>4 - Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.</h3>

    <?php
    $centigrados = 20;
    $fahrenheit = $centigrados * 9 / 5 + 32;
    echo "Los 20°C equivalen a $fahrenheit grados Fahrenheit.";
    ?>

<br><hr>

<h3>5 - Implementar algoritmos que permitan:</h3>
<h4>a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</h4>

    <?php
    $base = 18;
    $altura = 12;

    $perimetro = $base * 2 + $altura * 2;
    echo "El perímetro del rectángulo es de $perimetro cm.";
    echo "<br>";

    $area = $base * $altura;
    echo "El área del rectángulo es de $area cm.";
    ?>

<br><hr>

<h4>b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h4>

    <?php
    $pi = 3.14;
    $radio = 30;

    $diametro = $radio * 2;

    $perimetro = $diametro * $pi;
    echo "El perímetro del círculo es de $perimetro cm.";
    echo "<br>";

    $area = $pi * $radio**2;
    echo "El área del círculo es de $area cm.";
    ?>
    
</body>
</html>