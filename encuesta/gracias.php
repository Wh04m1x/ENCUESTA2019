<?php

	require ('../conexion.php');

	$id_encuesta = $_POST['id_encuesta'];
	$comentarios = $_POST['text'];
	$query10 = "SELECT * FROM encuestas WHERE id_encuesta = '$id_encuesta'";
	$resultado10 = $con->query($query10);
	$row10 = $resultado10->fetch_assoc();
	$queryc = "INSERT INTO comentarios (comentarios) 
	VALUES ('$comentarios')";
      $con->query($queryc);
  	$ids = array();


	  
 ?>


<!DOCTYPE html>
<html lang="esp">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>GRACIAS</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>GRACIAS</h1>
			</div>
			<h2>Muchas gracias por su participación en nuestra encuesta de satisfacción!</h2>

			<?php

			if ($row10['estado'] == 'Publico') {
			 	for ($i = 1; $i <= 100; $i++) {

					if (isset($_POST[$i])) {
						$ids[$i] = $_POST[$i];

						$id = $ids[$i];

						$query2 = "SELECT id_opcion, id_pregunta, valor FROM opciones WHERE id_opcion = '$ids[$i]'";
						$resultado2 = $con->query($query2);

						if ($row2 = $resultado2->fetch_assoc()) {
							$id_opcion = $row2['id_opcion'];
							$valor = $row2['valor'];
							$query3 = "INSERT INTO resultados (id_opcion, valor) 
							VALUES ('$id_opcion', '$valor')";
							$resultado3 = $con->query($query3);
							if ($resultado3) {
							
							} else { 
								echo "Error al ingresar resultado";
							} 
						}
					}
				}
			} else {
				echo "<div style='margin-top: 50px;'>ERROR!<br/>La encuesta se encuentra cerrada</div>";
			}

		 ?>

		<br/>
			<a href="encuestas.php"><span class="arrow"></span>Salir</a>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
