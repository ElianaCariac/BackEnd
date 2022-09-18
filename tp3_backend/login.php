<?php

$usuario = $_POST ["user"];
$contrasena = $_POST ["pass"];

$ckuser = "Eliana";
$ckpass = "BE1234";

if ($usuario==$ckuser && $contrasena==$ckpass) {
    header ("location:https://github.com/ElianaCariac/TrabajoFinal");
}
else
{
    header ("location:error.html");
}

?>