<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Tabla productos</title>
    </head>
    <body>

    <div class="titulo">
        <h1>Visualice sus productos</h1>
    </div>

    <div class="recuadro-tabla">
    <table class="table table-striped" style="width:80%">
        <thead>
            <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col">Fecha registro producto</th>
            </tr>
        </thead>

        <?php

        include ("conexion.php");

        $query = "SELECT * FROM detalle" ;
        $resultado = $db->query($query);
        while($row = $resultado->fetch_assoc())
        {
        $iid_detalle=$row['id_detalle'];
        $nnombre=$row['nombre_detalle'];
        $ccodigo=$row['codigo'];
        $ffecha_detalle=$row['fecha_detalle'];

        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'>$iid_detalle</th>";
        echo "<td>$nnombre</td>";
        echo "<td>$ccodigo</td>";
        echo "<td>$ffecha_detalle</td>";
        echo "</tr>";
        echo "</tbody>";
        }

        ?>

    </table>
    </div>
    <div class="caja-botones">
        <a href="registrar_productos.php" type="submit" class="botones btn btn-success">Nuevo producto</a>
        <a href="index.html" type="submit" class="botones btn btn-danger">Volver inicio</a>
    </div>
    

    <!------------Autor Tecnologo: Rubén Santiago Orejuela Torres------------>
</body>
</html>