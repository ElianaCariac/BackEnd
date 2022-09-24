<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 3</title>
</head>
<body>

<h1>Trabajo Práctico 3</h1>
<h2>Eliana Cariac</h2>

<h3>1. Mostrar los números del 1 al 100.</h3>

    <?php
    for($i=1; $i<=100; $i++){
        print "<p>$i</p>\n";
    }               
    
    ?>

<br><hr>

<h3>2. Mostrar los números del 100 al 1.</h3>

    <?php
    for($i=100; $i>=1; $i--){
        print "<p>$i</p>\n";
    }               
    
    ?>

<br><hr>

<h3>3. Mostrar los números pares del 1 al 100.</h3>

    <?php
    for($i=2; $i<=100; $i=$i+2){
        print "<p>$i</p>\n";
    } 

    ?>

<br><hr>

<h3>4. Mostrar los números impares del 1 al 100.</h3>

    <?php
    for($i=1; $i<=100; $i=$i+2){
        print "<p>$i</p>\n";
    } 

    ?>

<br><hr>

<h3>5. Mostrar la suma de los números de 1 a 20.</h3>

    <?php
    $numero = 0;
    for($i=1; $i<=20; $i++){
        $numero = $numero + $i;
        print "<p>$i + sus números anteriores es $numero.</p>\n";
    } 

    ?>

<br><hr>

<h3>6. Mostrar la suma de números pares de 1 a 20.</h3>

    <?php
    $numero = 0;
    for($i=2; $i<=20; $i=$i+2){
        $numero = $numero + $i;
        print "<p>$i + sus números pares anteriores es $numero.</p>\n";
    } 

    ?>

<br><hr>





    
</body>
</html>