<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 4</title>
</head>
<body>

<h1>Trabajo Práctico 4</h1>
<h2>Eliana Cariac</h2>

<h3>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h3>

    <?php
        $numerospares = ["2", "4", "6", "8", "10", "12", "14", "16", "18", "20"];
            print "<p>Los números pares del 1 al 20 son:</p>\n<p>$numerospares[0]</p>\n<p>$numerospares[1]</p>\n<p>$numerospares[2]</p>\n<p>$numerospares[3]</p>\n<p>$numerospares[4]</p>\n<p>$numerospares[5]</p>\n<p>$numerospares[6]</p>\n<p>$numerospares[7]</p>\n<p>$numerospares[8]</p>\n<p>$numerospares[9]</p>\n";
    ?>


<br><hr>

<h3>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r().</h3>

    <?php
        $datos = ["Pedro", "Ana", "34", "1"];         
            print_r($datos);      
    
    ?>

<br><hr>

<h3>3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455</h3>

    <?php
        $informacion = [
            'Nombre'=>"Pedro", 
            'Apellido'=>"Torres", 
            'Dirección'=>"Av. Mayor 3703", 
            'Teléfono'=>1122334455,
        ];

    ?>

<br><hr>

<h3>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h3>

<?php
        $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];  
        foreach ($ciudades as $variableindice => $nombre)
        {       
            print "<p>La ciudad con el índice $variableindice tiene el nombre $nombre.</p>\n";
        }
?>

<br><hr>

<h3>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.</h3>

    <?php
         $ciudades2 = ['MD' => "Madrid", 'BCL' => "Barcelona", 'LD' => "Londres", 'NY' => "New York", 'LA' => "Los Ángeles", 'CCG' => "Chicago"];  
         foreach ($ciudades2 as $variableindice2 => $nombre2)
         {       
             print "<p>El índice de $nombre2 es $variableindice2.</p>\n";
         }

    ?>

<br><hr>
 
</body>
</html>