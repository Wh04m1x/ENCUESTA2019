<?php 

  date_default_timezone_set("America/Lima");
  $date = new DateTime();

  $fecha_inicio = $date->format('Y-m-d H:i:s');
  
 ?>


<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Favicon - FIS -->
    <link rel="shortcut icon" href="../imagenes/Logo-fis.png">

    <title>USUARIO-Encuestas</title>
    <script type="text/javascript" language="javascript">
    history.pushState(null, null, location.href);
    window.onpopstate = function() {
        history.go(1);
    };
    </script>

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="javascript:void(0)">Sistema de Encuestas</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!--NAVBAR-->
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0" style="color: #fff">


            </form>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-12 row">
                <div class="col-md-12 col-xs-12">
                    <h3>SISTEMA DE ENCUESTAS</h3>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <h4>DEBE REGISTRARSE ANTES DE INCIAR LA ENCUESTA</h4>
                <form action="">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Numero de empleado</label>
                            <input type="text" class="form-control" name="numero-emp" required="" id="numero-emp"
                                autocomplete="off" placeholder="Numero de Empleado">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" required="" autocomplete="off"
                                name="Nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Apellido Paterno</label>
                            <input type="text" class="form-control" id="Apellidopa" required="" autocomplete="off"
                                name="Apellidopa" onKeyUp="buscar();" placeholder="Apellidopa">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Apellido Materno</label>
                            <input type="text" class="form-control" id="Apellidoma" required="" autocomplete="off"
                                name="Apellidoma" placeholder="Apellidoma">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Departamento</label>
                            <input type="text" class="form-control" id="Departamento" required="" autocomplete="off"
                                name="Departamento" placeholder="Departamento">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Puesto</label>
                            <input type="text" class="form-control" id="Puesto" required="" autocomplete="off"
                                name="Puesto" placeholder="Puesto">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Telefono</label>
                            <input type="text" class="form-control" id="Telefono" required="" autocomplete="off"
                                name="Telefono" placeholder="Telefono">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Ext</label>
                            <input type="text" class="form-control" id="Ext" required="" autocomplete="off" name="Ext"
                                placeholder="Ext">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Correo</label>
                            <input type="email" class="form-control" id="email" required="" autocomplete="off"
                                name="Ext" placeholder="Ext">
                        </div>
                  
                        <div class="modal-footer">
                <button type="button" class="btn btn-primary">CONTINUAR</button>
              </div>
                    </div>
            </div>
        </div>
        <!-- /Content Section -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="js/encuestas.js"></script>

</body>

</html>