<?php
require_once 'Encuesta.php';
$pollObject = new Poll();
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Sistema de encuestas orientado a objetos usando PHP - BaulPHP</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Sistema de encuestas orientado a objetos usando PHP</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      <p> <b>Selecciones su carrera favorita </b> </p>
      <div class="poll-container">
        <?php
            if (empty($_POST["submit"])) {
                $result = $pollObject->getCource();
                ?>
        <form method="POST" action="">
          <?php
                foreach ($result as $k => $v) {
                    ?>
          <div class='option-row'>
            <input class='radio-input' type='radio' name='vote'
                    value='<?php echo $result[$k]["id"]; ?>' />
            <?php echo $result[$k]["name"]; ?> </div>
          <?php } ?>
          <input id="btnSubmit" type="submit" name="submit"
                value="Enviar" />
        </form>
        <div> </div>
        <?php
            } else {
				$subjectId=$_POST["vote"];
                $pollObject->addVote($subjectId);
                $result = $pollObject->getCourcewithVote();
                foreach ($result as $k => $v) {
                ?>
        <div class='poll'><?php echo $result[$k]["name"]; ?> <b><?php echo $result[$k]["vote_count"]; ?></b> votos </div>
        <?php }
            } ?>
      </div>
      
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>
<script src="assets/jquery-1.12.4-jquery.min.js"></script> 
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>