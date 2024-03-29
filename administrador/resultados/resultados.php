<?php 

  include '../../conexion.php';
  
	$id_encuesta = $_GET['id_encuesta'];


  /* Consulta para extraer título y descripción de la encuesta*/
$query3 = "SELECT * FROM encuestas WHERE id_encuesta = '$id_encuesta'";
$resultados3 = $con->query($query3);
$row3 = $resultados3->fetch_assoc();


  $queryc = "SELECT  COUNT(id_opcion) div 6 AS total FROM resultados";
	$resultadosc = $con->query($queryc);
  $rowc = $resultadosc->fetch_assoc();
  
  
 ?>

<!DOCTYPE html>
<html lang="esp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resultados</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
 

    <script src="media/js/lenguajeusuario.js"></script>     
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });

    $('body').on("click", ".view_activo", function(e) {
		e.preventDefault();
		dialog.dialog('open');
	  });

	  $('.view_activo').click(function(e) {
		e.preventDefault();
		dialog.dialog('open');
	  });
    </script> 
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
    #chart-container {
        width: 85%;
        height: auto;
    }
    </style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <br>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $row3['titulo'] ?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">



                        <!-- Earnings (Monthly) Card Example -->


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total
                                                de personas encuestadas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $rowc['total'] ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Nivel de Atencion por area:</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                 <?php
                 include 'NIVEL.php';
                 ?>
                                
                            </div>
                        </div>
                    </div>

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Resultados</h6>
                    </div>
                    <?php

$consulta = "SELECT * FROM preguntas WHERE id_encuesta = '$id_encuesta' AND ver = '0'";
$resultados2 = $con->query($consulta);

		while ($row7 = $resultados2->fetch_assoc()) {
     $pregunta = $row7['id_pregunta'];
?>
                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-7">
                        <!-- Pie Chart -->
                        <div class="col-xl-12 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><?php echo $row7['titulo'] ?></h6>

                                </div>


                                <?php
$consulta78 = "SELECT distinct valor FROM resultados WHERE pregunta = '3'";
$resultados78 = $con->query($consulta78);
while ($row78 = $resultados78->fetch_assoc()) {
  $area = $row78['valor'];
?>

                                <!-- Pie Chart -->
                                <div class="col-xl-12 col-lg-5">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-success">
                                                <?php echo ''.$row78['valor']; ?></h6>

                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                                <!-- graficas-->

                                                <script type="text/javascript">
                                                google.charts.load('current', {
                                                    'packages': ['corechart']
                                                });
                                                google.charts.setOnLoadCallback(drawChart);
                                                function drawChart() {
                                                    var data2 = google.visualization.arrayToDataTable([
                                                        ['valor', 'total'],
                                                        <?php
                                                        include '../../conexion.php';
                                                        $query =
                                                        "SELECT preguntas.id_pregunta, preguntas.titulo,COUNT('preguntas.titulo') as total, opciones.valor FROM opciones INNER JOIN preguntas ON opciones.id_pregunta=preguntas.id_pregunta INNER JOIN resultados ON opciones.id_opcion=resultados.id_opcion WHERE preguntas.id_pregunta = '$pregunta' and area ='$area' GROUP BY opciones.valor ORDER BY preguntas.id_pregunta";
                                                        $exec = mysqli_query($con, $query);
                                                        while ($row = mysqli_fetch_array($exec)) {
                                                            echo "['".$row['valor']."',".$row['total']. "],";
                                                        } ?>
                                                    ]);
                                                    var option5s = {
                                                        title: '<?php echo $row7['titulo'].' '.$row78['valor']; ?>'
                                                    };
                                                    var chart = new google.visualization.PieChart(document
                                                        .getElementById('piechart3<?php echo $area.'-'.$pregunta; ?>'));
                                                    chart.draw(data2, option5s);
                                                }
                                                </script>
                                            <!-- end graficas-->
                                <div id="piechart3<?php echo $area.'-'.$pregunta; ?>" style="width: 800px; height: 500px;"></div>
                                        </div>
                                        <!-- -->

                                    </div>
                                </div>

                                <?php

}
?>
                            </div>

                        </div>
                    </div>
                    <?php

    }
?>

                </div>

                <!-- Content Row -->
                <div class="row">


                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-10">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">COMENTARIOS</h6>
                            </div>
                 
            

<table style="white-space: nowrap" id="tabla" class="table table-striped table-bordered" >
  <thead>
  <tr>
    <th>COMENTARIOS.</th>
    <th>FECHA</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>

                    
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>AGROS S.A DE C.V.</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->


    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="media/js/jquery.dataTables.min.js"></script>
    <script src="media/js/dataTables.bootstrap.min.js"></script>         
</body>

</html>