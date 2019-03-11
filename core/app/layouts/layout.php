<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>INSFA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Rubik|Shadows+Into+Light|Sniglet|Raleway" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <img src="assets/img/logo.jpg" width="70px">
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./?view=index">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Institucional
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./?view=about">Nuestra Historia</a>
              <a class="dropdown-item" href="./?view=mision">Misión y Visión</a>
              <!--<a class="dropdown-item" href="agent-single.html">Agent Single</a> -->
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Niveles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="property-single.html">Inicial</a>
              <a class="dropdown-item" href="blog-single.html">Primario</a>
              <a class="dropdown-item" href="agents-grid.html">Secundario</a>
              <!--<a class="dropdown-item" href="agent-single.html">Agent Single</a> -->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Blas Pascal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./?view=blog">Proyectos</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link" href="./?view=contact">Contacto</a>
          </li>
          <div>
            <img src="assets/img/25.png" style="width: 140px; text-align: center; margin-left: 3em;">
          </div>                   
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <?php 
  View::load("index");
  ?>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="container center">
            <img src="assets/img/10.jpg" style="width: 70%">
          </div>          
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-3">
          <span class="text-copy">Aguero 724 Esq. Constitución</span>
          <br>
          <span class="text-copy">Marcos Paz - Pcia. Bs. As.</span>
          <br>
          <span class="text-copy">(0220)-477-5889</span>
          <br>
          <span class="text-copy">administracion@insfa.com.ar</span>
          <br><br>
        </div>
        <div class="col-md-3">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="style" href="./?view=about">Institucional</a>
              </li>
              <li class="nav-item">
                <a class="style" href="./?view=agents">Autoridades</a>
              </li>
              <li class="nav-item">
                <a class="style" href="property-grid.html">Plan Educativo</a>
              </li>
              <li class="nav-item">
                <a class="style" href="./?view=blog">Proyectos</a>
              </li>         
              <li class="nav-item">
                <a class="style" href="admin/index.php">Portal</a>
              </li>          
            </ul>
        </div>
        <div class="col-md-3">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="style" href="./?view=about">Institucional</a>
              </li>
              <li class="nav-item dropdown">
                <a class=" style nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Niveles
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="property-single.html">Inicial</a>
                  <a class="dropdown-item" href="blog-single.html">Primario</a>
                  <a class="dropdown-item" href="agents-grid.html">Secundario</a>
                  <!--<a class="dropdown-item" href="agent-single.html">Agent Single</a> -->
                </div>
              </li>
              <li class="nav-item">
                <a class="style" href="property-grid.html">Blas Pascal</a>
              </li>
              <li class="nav-item">
                <a class="style" href="./?view=blog">Proyectos</a>
              </li>         
              <li class="nav-item">
                <a class="style" href="./?view=contact">Contacto</a>
              </li>          
            </ul>
        </div>                   
        <div class="col-md-3">
          <div class="row">
            <div class="col-md-12">              
              <p class="text-copy">2019 &copy;
                <span class="text-copy">Instituto Ntra. Sra. de Fátima </span>
                <p class="text-copy">Todos los derechos reservados</p>
                <p class="text-copy">Sitio creado por <a href="http://www.oestedev.com"><img src="assets/img/oestedev.png" style="width: 60px;"></a></p>        
            </div>                 
          </div>          
        </div>
      </div>
    </div>
  </footer>

  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets/lib/popper/popper.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/scrollreveal/scrollreveal.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
