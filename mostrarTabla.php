<!DOCTYPE html>

<html>
    <head>
        <title>Mostrando Tabla</title>
        <link rel="stylesheet" href="estiloTabla.css"/>
    </head>
    <body style="background-color:#88B04B;">
        <br>
        <h2>Estos son los datos que hay actualmente</h2><br>
        ­<table>
            <tr>
                <td>ID</td>
                <td>Apellido</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Correo Electrónico</td>
            </tr>  
            <?php
            
            require "./conexion.php";
            $sql = "SELECT * FROM tabla1";
            $result = mysqli_query($conexion, $sql);

                while ($row = mysqli_fetch_array($result)) {
                 ?>   
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['apellido'] ?></td>
                <td><?php echo $row['nombres'] ?></td>
                <td><?php echo $row['edad'] ?></td>
                <td><?php echo $row['email'] ?></td>
            </tr>      
<?php
                }
                ?>
        </table>


    </body>

</html>

