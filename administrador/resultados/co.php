<?php
include '../../conexion.php';

$tabla = "";
$consulta2 = "SELECT comentarios, FECHA FROM comentarios;";
$resultados22 = $con->query($consulta2);
$i = 1;
while ($row22 = $resultados22->fetch_assoc()) {

    $tabla .= '{
        "login":"' . $row22['comentarios'] . '",
        "password":"' . $row22['FECHA'] . '"
      },';
}

//eliminamos la coma que sobra
$tabla = substr($tabla, 0, strlen($tabla) - 1);

echo '{"data":[' . $tabla . ']}';