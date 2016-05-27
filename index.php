<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Round About - Start Bootstrap Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/round-about.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">JRWALIAS</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="#">Acerca de</a>
        </li>
        <li>
          <a href="#">Ejercicios</a>
        </li>
        <li>
          <a href="#">Contactame</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
<ul>
  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">Ejemplos</h2>
    </div>


  </div>
  <?php
  // http://stackoverflow.com/a/35105800
  function getDirContents($dir, $filter = '', &$results = array())
  {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
      $path = realpath($dir . DIRECTORY_SEPARATOR . $value);

      if (!is_dir($path)) {
        if (empty($filter) || preg_match($filter, $path)) $results[] = $path;
      } elseif ($value != "." && $value != "..") {
        getDirContents($path, $filter, $results);
      }
    }

    return $results;
  }

  $ficheros = getDirContents('.', '/ejemplo[0-9][0-9]\.php$/');

  foreach ($ficheros as $fichero) {
    $nombre = str_replace($_SERVER['DOCUMENT_ROOT'], "", realpath($fichero));

    //if (($nombre) == "/ejemplos-php/01_php/ejemplo*.php") {
      echo '<div class="col-lg-4 col-sm-6 text-center">';
      echo '<h3>Jose Ramon Walias<small> Ejemplo</small></h3>';
      echo '<img class="img-circle img-responsive img-center" src="images/php_logo.png" alt ="">';
      echo '<a href="' . $nombre . '">PULSA PARA ABRIR</a>';

      echo '</div>';
    //}


  }

  echo '<div class="row">';
    echo'<div class="col-lg-12">';
     echo' <h2 class="page-header">Ejercicios</h2></div>';

  $ficheros = getDirContents('.', '/ejer..\.php$/');

  foreach ($ficheros as $fichero) {
    $nombre = str_replace($_SERVER['DOCUMENT_ROOT'], "", realpath($fichero));


      echo '<div class="col-lg-4 col-sm-6 text-center">';
      echo '<h3>Jose Ramon Walias<small> Ejercicio</small></h3>';
      echo '<img class="img-circle img-responsive img-center" src="images/php_logo.png" alt ="">';
      echo '<a href="' . $nombre . '">PULSA PARA ABRIR</a>';
      echo '</div>';

  }

  ?>
</ul>
  <!-- Page Content -->
  <div class="container">


    <!-- Footer -->
    <footer>
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright &copy; Jose Ramon Walias 2016</p>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
    </footer>

  </div>
</body>

</html>
