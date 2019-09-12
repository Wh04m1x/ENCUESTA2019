<?php
                  $consulta79 = "SELECT distinct valor FROM resultados WHERE pregunta = '3'";
                  $resultados79 = $con->query($consulta79);
                  while ($row79 = $resultados79->fetch_assoc()) {
                    $area79 = $row79['valor'];
                  ?>

<h6 class="m-0 font-weight-bold text-succes">
    <?php

                                                $consulta791 = "SELECT COUNT(IF(nivel='bueno',1, NULL)) 'BUENO',
                                                COUNT(IF(nivel='regular',1, NULL)) 'REGULAR',
                                                COUNT(IF(nivel='malo',1, NULL)) 'MALO'
                                         FROM resultados WHERE AREA ='$area79';";
                                                $resultados791 = $con->query($consulta791);
                                                $row791 = $resultados791->fetch_assoc();
                                                $BUENO = $row791['BUENO'];
                                                $MALO = $row791['MALO'];
                                                $REGULAR = $row791['REGULAR'];
                                  if ($BUENO > $REGULAR AND $BUENO > $MALO  ) {
                                    echo ''.$area79.': <p class="text-success">BUENO</p>';
                                  } elseif ( $REGULAR > $BUENO AND $REGULAR > $MALO) {
                                    echo ''.$area79.': <p class="text-warning">REGULAR</p>';
                                  }elseif ($MALO > $REGULAR AND $MALO > $BUENO) {
                                    echo ''.$area79.': <p class="text-danger">MALO</p>';
                                  }else {
                                    echo ''.$area79.': SIN EVALUACIÓN';
                                  }
                                  
                                                
                                    

                                  ?>                                    
</h6>


<br>
<?php
                  }
                   ?>