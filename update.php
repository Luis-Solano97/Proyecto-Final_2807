<?php
	
	require 'conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	
	$sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>Registro modificado</h3>
				<?php } else { ?>
				<h3>Error al modificar</h3>
				<?php } ?>
				
				<a href="index.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
