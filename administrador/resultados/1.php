<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data2 = google.visualization.arrayToDataTable([
          ['valor','total'],

           <?php 
            include '../../conexion.php';
			$query = "SELECT preguntas.id_pregunta, preguntas.titulo,COUNT('preguntas.titulo') as total, opciones.valor FROM opciones INNER JOIN preguntas ON opciones.id_pregunta=preguntas.id_pregunta INNER JOIN resultados ON opciones.id_opcion=resultados.id_opcion WHERE preguntas.id_pregunta = '4' and area ='NOMINA' GROUP BY opciones.valor ORDER BY preguntas.id_pregunta";
 
			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['valor']."',".$row['total']."],";
			 }
			 ?> 
        ]);

        var option5s = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartN'));

        chart.draw(data2, option5s);
      }
    </script>


<div id="piechartN" style="width: 900px; height: 500px;"></div>