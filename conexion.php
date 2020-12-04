<?php

$host = "localhost";
$user = "Venecio";
$password = "";
$bd_name = "basephp";

$conexion = mysqli_connect($host, $user, $password, $bd_name);

if (!$conexion) {
    die("Fallo la conexion: " . mysqli_connect_error());
}


