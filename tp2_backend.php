<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 2</title>
</head>
<body>

<h1>Trabajo Práctico 2</h1>
<h2>Eliana Cariac</h2>

<h3>Crear una variable n y validar que sea un número positivo.</h3>

    <?php
    $numero = 3;

        if($numero > 0) 
        {
            echo "El número $numero es un número positivo.";
        }   
        elseif($numero < 0)
        {
            echo "El número $numero es un número negativo.";
        }   
        else
        {
            echo "El número $numero no es positivo ni negativo.";
        }
    
    ?>

<br><hr>

<h3>2 - Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h3>

    <?php
    $numero = 7;

        if($numero > 1 && $numero < 10)
        {
            echo "El número $numero es mayor a uno y menor a 10.";
        }
        else
        {
            echo "El número $numero no cumple con las condiciones de ser mayor a 1 y menor a 10.";
        }

    ?>

<br><hr>

<h3>3 - Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h3>

    <?php
    $numero = 7;

        if($numero > 10 || $numero < 2)
        {
            echo "El número $numero es mayor a 10 o menor a 2.";
        }
        else
        {
            echo "El número $numero no cumple con las condiciones de ser mayor a 10 o menor a 2.";
        }

    ?>

<br><hr>

<h3>4 - Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. 
    Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. 
    Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división. 
    Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h3>

    <?php
    $numero1 = 20;
    $numero2 = 40;

        if($numero1>$numero2)
        {
            $suma = $numero1 + $numero2;
            echo "$numero1 es mayor a $numero2 y su suma nos da $suma.";
            echo "<br>";

            $resta = $numero1 - $numero2;
            echo "$numero1 es mayor a $numero2 y su resta nos da $resta.";
            echo "<br>";
        }
        elseif($numero2>$numero1)
        {
            $multiplicacion = $numero2 * $numero1;
            echo "$numero2 es mayor a $numero1 y su multiplicación nos da $multiplicacion.";
            echo "<br>";

            $division = $numero2 / $numero1;
            echo "$numero2 es mayor a $numero1 y su división nos da $division, ";

            $resto = $numero2 % $numero1;
            echo "y el resto de dicha división es de $resto.";
        }
        else
        {
            echo "Los números ingresados son iguales.";
        }

    ?>

<br><hr>

    
</body>
</html>