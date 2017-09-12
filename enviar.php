

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Welcome to Scrolling Nav</h1>
        <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Resultados</h2>
<?php
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

$enviado = isset($_POST['enviado']) ? (int) $_POST['enviado'] : 0;
$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$direccion = isset($_POST['direccion']) ? Filtro($_POST['direccion']) : '';
$comuna = isset($_POST['comuna']) ? Filtro($_POST['comuna']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$diputado = isset($_POST['diputado']) ? Filtro($_POST['diputado']) : '';
$concejal = isset($_POST['concejal']) ? Filtro($_POST['concejal']) : '';

/*
 if($enviado == 1 ) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
  exit;
} else if(empty($nombre)) {
  $error = 'Por favor, ingrese su nombre.';
} else if(empty($direccion)) {
  $error = 'Por favor, ingrese su direccion.';
} else if(empty($comuna)) {
  $error = 'Por favor, ingrese su comuna.';
}

// Vista de error
if(!empty($error)) {
?>
<div class="alert alert-info">
  <i class="glyphicon glyphicon-info-sign"></i>
  <?php echo $error; ?>
</div>
<a href="./" class="btn btn-warning">
  <i class="glyphicon glyphicon-chevron-left"></i>
  Volver
</a>





*/
?>
      <h3 class="panel-title">Datos enviados</h3>
      <p>Bienvenido(a) <b><?php echo $nombre; ?></b>,</p>
      <p>Tu dirección es <b><?php echo $direccion; ?></b></p>
      
      <p>
        Tu comuna es: <b><?php echo $comuna; ?> </b>
       
      </p>
      <p>
        Tu sexo es: <b><?php if ($sexo == 'm'){echo 'Masculino';} elseif ($sexo == 'f'){echo 'Femenino';} else echo 'No responde';?></b>
      </p>
      <p>
        Tu candidato a diputado es: <b><?php if ($diputado == '1'){echo 'Optimus Prime';} elseif ($diputado == '2'){echo 'Soy la Comadreja';} elseif ($diputado == '3'){echo 'Pastor Soto';} else echo 'Andrés Alvarado';?></b>
      </p>
       <p>
        Tu candidato a concejal es: <b><?php if ($diputado == '1'){echo 'Noob Noob';} elseif ($diputado == '2'){echo 'Bird Man';} elseif ($diputado == '3'){echo 'Tiny Rick';} else echo 'Jerry Smith';?></b>
      </p>
    


          </div>
        </div>
      </div>
    </section>

    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Services we offer</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>
