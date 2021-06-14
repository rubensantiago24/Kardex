<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    
    <title>Registrar Producto</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">REGISTRAR PRODUCTOS</a>
    </nav>

<?php
	if((isset($_REQUEST['R'])) and ($_REQUEST['R'] == 1)){

		echo'<div id="myAlert" class="alert alert-success alert-dismissible">';
		echo'<strong>¡Exito!</strong> Producto Agregado Correctamente.';
		echo'</div>';
	}
?>

    <div class="titulo">
        <h1>Registre su producto</h1>
    </div>

    
<form action="proceso_registrar_productos.php" method="POST">
    <div class="form-register">
  <div class="form-group">
    <label>Nombre producto</label>
    <input type="text" class="form-control" pattern ="[a-zA-Z  ]{1,15}" required  autocomplete="OFF"  placeholder="Nombre producto" name="nombre_detalle">
  </div>
  <div class="form-group">
    <label>Codigo</label>
    <input type="int" class="form-control" required pattern="[0-9]{1,15}"  autocomplete="OFF" placeholder="Codigo producto" name="codigo">
  </div>
  <div class="form-group">
    <label>Fecha</label>
    <input type="date" class="form-control" required placeholder="Fecha producto" name="fecha_detalle">
  </div>
     <div class="caja-botones">
        <button type="submit" class="botones btn btn-primary">Registrar</button>
        <a href="index.html" type="submit" class="botones btn btn-danger">Volver inicio</a>
        <a href="tabla_productos.php" type="submit" class="botones btn btn-success">Ver tabla</a>
    </div>
  </div>
</form>


  <script type="text/javascript" language="javascript" src="js/docs.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="resources/demo.js"></script>

<!-------------ALERTAS------------->
<script>
    $('#myAlert').on('closed.bs.alert', function () {
	$('.alert').alert('close');
	}); 

</script>

    <!------------Autor Tecnologo: Rubén Santiago Orejuela Torres------------>
</body>
</html>