<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP JSON</title>
</head>
<body>
<h1>Ejercicio JSON</h1>
	
	<div id="contenedor"></div>
	
	<?php
	
	$varios = '{
			"nombre": "Luis Berganza",
			"id":313,
			"profesor":true,
			"idCursos":[53,765,675],
			"cursos": {
				"marketing":"Mi primera app para iPhone",
				"programacion": [
					"Objective-C",
					"Xcode",
					"Json"		
				]
			},		
			"vacaciones":null
		}';
	
	print_r(json_decode($varios, true));
	?>
</body>
</html>