<?php

  	require "../conexion.php";
$enceusta = base64_decode($_GET['id_encuesta']);
  	$id_encuesta = $enceusta;
 	$query2 = "SELECT * FROM preguntas WHERE id_encuesta = '$id_encuesta'";
  	$respuesta2 = $con->query($query2);

  	$query3 = "SELECT encuestas.titulo, encuestas.descripcion, preguntas.id_pregunta, preguntas.id_encuesta, preguntas.id_tipo_pregunta 
		FROM preguntas
		INNER JOIN encuestas
		ON preguntas.id_encuesta = encuestas.id_encuesta
		WHERE preguntas.id_encuesta = '$id_encuesta'";
	$respuesta3 = $con->query($query3);
	$row3 = $respuesta3->fetch_assoc();


 ?>
<!DOCTYPE html>
<html lang="esp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!--Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="shortcut icon" href="../../css/favicon(1).ico" />
    <link rel="stylesheet" href="css/css/multi-step-form.css" type="text/css">

    <script type="text/javascript" src="src/txt.js"></script>

    <style>
    #validacion {
        display: none;
    }
    </style>



    <script type="text/javascript">
    function validar() {
        element = document.getElementById("validacion");
        check = document.getElementById("additional");
        if (check.checked) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
    </script>
</head>

<body>

    <div id="wrapper">

        <div id="container body-content">

            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    <span class="sr-only">0% Completado</span>
                </div>

            </div>

            <!-- action="../../pdf/carta_responsiva.php"-->
            <form class="form-horizontal msf" action="gracias.php" method="Post" autocomplete="off">
                <div class="msf-header">
                    <div class="row">
                        <div class=" col-md-6 col-md-offset-3">
                            <h2><?php echo $row3['titulo'] ?></h2>
                            <p><?php echo $row3['descripcion'] ?></p>
                        </div>
                    </div>
                </div>

                <div class="msf-content">

                    <input type="hidden" id="id_encuesta" name="id_encuesta" value="<?php echo $id_encuesta ?>" />


                    <?php

 			$i = 1; 
			while (($row2 = $respuesta2->fetch_assoc())) {

			$id = $row2['id_pregunta'];

			$query = "SELECT preguntas.id_pregunta, preguntas.titulo, preguntas.id_tipo_pregunta, opciones.id_opcion, opciones.valor
				FROM opciones
				INNER JOIN preguntas
				ON preguntas.id_pregunta = opciones.id_pregunta
                WHERE preguntas.id_pregunta = $id
				ORDER BY opciones.id_pregunta, opciones.id_opcion";

			$respuesta = $con->query($query);

		 ?>
                    <div class="msf-view">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <h4><?php echo "$i. " . $row2['titulo'] ?></h4>
                                    
                                <?php 
			while (($row = $respuesta->fetch_assoc())) {

		 ?>
                                <div class="radio">
                                    <label ><input class="form-check-input" type="radio"
                                            name="<?php echo $row['id_pregunta'] ?>"
                                            value="<?php echo $row['id_opcion'] ?>" required>
                                        <?php echo $row['valor'] ?></label>
                                </div>


                                <?php 	
			}
            $i++;
            
            ?>

                            </div>

                        </div>

                    </div>
                    
                    <?php
        }
        

		 ?>


                    <div class="msf-view">

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group col-md-12">
                                    <h4>Por favor déjanos saber en que podemos mejorar nuestro servicio
                                    </h4>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" rows="10" name="text" id="text"
                                            value=""></textarea>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="msf-navigation">
                    <div class="row">
                        <div class="col-md-3">

                            <button type="button" data-type="back" class="btn btn-default msf-nav-button"><i
                                    class="fa fa-chevron-left"></i> Regresar </button>

                        </div>

                        <div class="col-md-3 col-md-offset-6">
                            <button type="button" data-type="next" onclick="enviartexto()"
                                class="btn btn-default msf-nav-button">Continuar <i
                                    class="fa fa-chevron-right"></i></button>

                            <button type="submit" data-type="submit" 
                                class="btn btn-primary msf-nav-button">Enviar</button>
                        </div>

                    </div>
                </div>


            </form>

        </div>

    </div>


    <br>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript" src="src/knockout-min.js"></script>

    <script type="text/javascript" src="src/jquery.validate.min.js"></script>
    <script type="text/javascript" src="src/jquery.validate.unobtrusive.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="src/multi-step-form.js"></script>



    <script type="text/javascript">
    function ViewModel() {
        var self = this;

        self.Name = ko.observable('');
        self.Email = ko.observable('');
        self.Details = ko.observable('');

        self.AdditionalDetails = ko.observable('');
        self.availableTypes = ko.observableArray(['New', 'Open', 'Closed']);
        self.chosenType = ko.observable('');

        self.availableCountries = ko.observableArray(['France', 'Germany', 'Spain', 'United States', 'Mexico']),
            self.chosenCountries = ko.observableArray([]) // Initially, only Germany is selected


    }

    var viewModel = new ViewModel();

    ko.applyBindings(viewModel);

    $(document).on("msf:viewChanged", function(event, data) {
        var progress = Math.round((data.completedSteps / data.totalSteps) * 100);

        $(".progress-bar").css("width", progress + "%").attr('aria-valuenow', progress);;
    });

    $(".msf:first").multiStepForm({
        activeIndex: 0,
        validate: {},
        hideBackButton: false,
        allowUnvalidatedStep: false,
        allowClickNavigation: true
    });
    </script>




</body>

</html>