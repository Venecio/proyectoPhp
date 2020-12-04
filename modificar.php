<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Datos</title>
        <link rel="stylesheet" href="./estilos.css"/>
    </head>
    <body style="background-color:#88B04B">
        <br>
        <form  method="post">
            <h2><font face="Century Gothic">Ingrese los datos a modificar en base de datos</font></h2>
                <label>ID</label><br>
            <input type="number" name="id" ><br>
            <label>Apellido</label><br>
            <input type="text" name="apellido" ><br>
            <label>Nombre</label><br>
            <input type="text" name="nombre" ><br>
            <label>Edad</label><br>
            <input type="number" name="edad" ><br>
            <label>Correo</label><br>
            <input type="email" name="email" ><br>
            <br>
            <input type="submit" name="modificar" value="Modificar">
            <br>
            <?php
            include "./conexion.php";
            if (isset($_POST['modificar'])) {
                $id = $_POST['id'];
                $apellido = $_POST['apellido'];
                $nombres = $_POST['nombre'];
                $edad = $_POST['edad'];
                $email = $_POST['email'];
                $selectDb = mysqli_select_db($conexion,"");
                mysqli_select_db ($conexion , $bd_name ) or die (mysqli_error($db_name));
                mysqli_query($conexion,"UPDATE tabla1 SET apellido = '$apellido',nombres = '$nombres',edad='$edad',email='$email'
                WHERE id= '$id'");
                echo "Modificado Correctamente";
                //falta comprobación por si modifico o no.
            }
            require "./mostrarTabla.php";
            ?>
            <body>
            <html>
