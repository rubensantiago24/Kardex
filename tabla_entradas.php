<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Tabla entradas</title>
    </head>
    <body>

    <div class="titulo">
        <h1>Visualice sus entradas</h1>
    </div>

    <div class="recuadro-tabla">
    <table class="table table-striped" style="width:80%">
        <thead>
            <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor unitario</th>
            <th scope="col">Valor total</th>
            <th scope="col">Fecha entrada</th>
            <th scope="col">Producto elegido</th>
            </tr>
        </thead>

        <?php

        include ("conexion.php");

        $query = "SELECT * FROM entradas" ;
        $resultado = $db->query($query);
        while($row = $resultado->fetch_assoc())
        {
        $iid_entradas=$row['id_entradas'];
        $ccantidad_entradas=$row['cantidad_entradas'];
        $vvalor_unitario_entradas=$row['valor_unitario_entradas'];
        $vvalor_total_entradas=$row['valor_total_entradas'];
        $ffecha_entradas=$row['fecha_entradas'];
        $ffk_id_detalle_entradas=$row['fk_id_detalle_entradas'];
        $numero_formateado_unitario = number_format($vvalor_unitario_entradas);
        $numero_formateado_total = number_format($vvalor_total_entradas);
        
        //------------------- consultar estado real nombre--------------------------------		
        $query2 = "SELECT * FROM detalle WHERE id_detalle = '$ffk_id_detalle_entradas'";
                  	
        $resultado2 = $db->query($query2);
        while($row2 = $resultado2->fetch_assoc())
        {
          $nnombre_detalle=$row2['nombre_detalle'];
        }


        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'>$iid_entradas</th>";
        echo "<td>$ccantidad_entradas</td>";
        echo "<td>$numero_formateado_unitario</td>";
        echo "<td>$numero_formateado_total</td>";
        echo "<td>$ffecha_entradas</td>";
        echo "<td>$ffk_id_detalle_entradas - ($nnombre_detalle) </td>";
        echo "</tr>";
        echo "</tbody>";
        }

        ?>

    </table>
    </div>
    <div class="caja-botones">
        <a href="registrar_entradas.php" type="submit" class="botones btn btn-success">Nuevo entrada</a>
        <a href="index.html" type="submit" class="botones btn btn-danger">Volver inicio</a>
    </div>
    

    <!------------Autor Tecnologo: Rubén Santiago Orejuela Torres------------>
</body>
</html>