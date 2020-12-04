<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Datos </title>
        <link rel="stylesheet" href="estiloTabla.css"/>
        <link rel="stylesheet" href="estilos.css"/>
    </head>
    <body style="background-color:#88B04B";>
        
            
        <form method="post">
            <label><h2>Ingrese dato que desee buscar</h2></label>
            <br>
            <input type ="text" name="campo">
            <input type ="submit" name="buscar" value="Buscar">
       <table>
           
           
        <?php
            require "./conexion.php";
            
            
            if(isset($_POST['buscar'])){
               $buscar = $_POST['campo'];
                mysqli_select_db ($conexion , $bd_name ) or die (mysqli_error($db_name));
              $sql = "SELECT * FROM tabla1 WHERE id LIKE '%".$buscar."%' OR apellido LIKE '%".$buscar."%' OR nombres LIKE '%".$buscar."%'OR edad LIKE '%".$buscar."%'OR email LIKE '%".$buscar."%'";
            $result = mysqli_query($conexion, $sql);
            
                while ($row = mysqli_fetch_assoc($result)) {
                 ?>   
            <tr>
                <td>ID</td>
                <td>Apellido</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Correo Electrónico</td>
           </tr>
           
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['apellido'] ?></td>
                <td><?= $row['nombres'] ?></td>
                <td><?= $row['edad'] ?></td>
                <td><?= $row['email'] ?></td>
            </tr> 
            //al filtrar datos del mismo nombre, repite toda la tabla
<?php
                }
                ?>
          <?php   }      
            ?>
    
        
        </table>
    </body>
    </html>