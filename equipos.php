<!DOCTYPE html>
<?php
	require_once('accesodatos/equipos.php'); //utilizar archivo de equipos
	$tabla = listadoEquipos(); //ejecutar consulta
?>
<html>
	<head>
		<title>RavnCellular</title>
		<link href="css/estilo.css" rel="stylesheet"></link>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<div id="contenedor">
			<header><a href="index.php"><img src="imagenes/logo.png" border="0px"></img></a></header>
			<div id="encabezado">Equipos</div>
			<div id="texto">
			<?php
				while ($registro=mysql_fetch_assoc($tabla)) {
			?>
			<div class="articulo">
				<table class="articulotabla">
					<tr><td class="articulofoto"><img src="fotos/<?php echo $registro['equ_foto']; ?>"></img></td></tr>
					<tr><td class="articulomarca"><?php echo $registro['mar_nombre']; ?></td></tr>
					<tr><td class="articulomodelo"><?php echo $registro['equ_modelo']; ?></td></tr>
					<tr><td class="articuloprecio">$ <?php echo number_format($registro['equ_precio'],2); ?></td></tr>
					<tr><td class="articuloboton"><a href="detalleequipo.php?id=<?php echo $registro['equ_id']; ?>">Detalle</a></td></tr>
				</table>
			</div>
			<?php 
				}
			?>
			</div>	
			<div style="clear:both;"></div>
		</div>
		<footer><big>Universidad Tecnol&oacute;gica de Tijuana</big><br>Tecnolog&iacute;s de la Informaci&oacute;n y Comunicaci&oacute;n<br>2013</footer>
	</body>
</html>
