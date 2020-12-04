<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Datos </title>
        <link rel="stylesheet" href="./estilos.css"/>
        <link rel="stylesheet" href="./estiloTabla.css.css"/>
    </head>
    <body>
        <form method="post">
            <h2><font face="Century Gothic">Ingrese la ID de la fila que desee eliminar</font></h2>
                <label>ID </label><br>
            <input type="number" name="id" ><br>
            <input type="submit" name="eliminar" value="Eliminar" ><br>
        
                <?php
               require "./conexion.php";
               require "./mostrarTabla.php";
               if (isset($_POST['eliminar'])) {
                $id = $_POST['id'];
                mysqli_select_db ($conexion , $bd_name ) or die (mysqli_error($db_name));
                mysqli_query($conexion,"DELETE FROM tabla1 WHERE id= '$id'");
                echo "Registro Eliminado";
               }
         
                ?>  
                </body>
                </html>