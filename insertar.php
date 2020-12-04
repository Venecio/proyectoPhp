<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar Datos</title>
        <link rel="stylesheet" href="./estilos.css"/>
    </head>
    <body style="background-color:#88B04B";>
        <br>
         <form method="post">
            <h2><font face="Century Gothic">Ingrese los datos a guardar en base de datos</font></h2>
            <label>Apellido </label><br>
            <input type="text" name="apellido" ><br>
            <label>Nombre </label><br>
            <input type="text" name="nombre" ><br>
            <label>Edad </label><br>
            <input type="number" name="edad" ><br>
            <label>Correo </label><br>
            <input type="email" name="email" ><br>
            <br>
            <input type="submit" name="guardar" value="Guardar"> 
            <br>
<?php
require "./conexion.php";
if (isset($_POST['guardar'])) {
    $apellido = $_POST['apellido'];
    $nombres = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $insertar = "INSERT INTO tabla1 (apellido, nombres, edad, email)
                VALUES ('$apellido','$nombres' ,'$edad', '$email')";
    $resultado = mysqli_query($conexion, $insertar);
    echo "Datos insertados";
}



?>
<body>
<html>
    
