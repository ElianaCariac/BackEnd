<?php

$user = $_POST["user"];
$pass = $_POST["pass"];

$usuario = "Eliana";
$contrasena = "Cariac";

if ($usuario == $user && $contrasena == $pass ){
  header ("location:listar.php");
} else {
  header ("location:error.html");}


 ?>
