<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Instituto Nuestra Señora de Fátima</title>
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>

  <!-- Libraries CSS Files -->
  <link href="assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Noto+Serif+JP|Questrial" rel="stylesheet">

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
      <img src="assets/img/logo-insfa.png" width="60px" style="margin-right: 7%">
      <div class="navbar-collapse collapse center" id="navbarDefault">
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
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Niveles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./?view=inicial">Inicial</a>
              <a class="dropdown-item" href="./?view=primaria">Primario</a>
              <a class="dropdown-item" href="./?view=secundaria">Secundario</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./?view=proyect">Proyectos</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link" href="./?view=contact">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./?view=pascal">Universidad Blas Pascal</a>
          </li>                            
        </ul>
        <a href="./?view=about"><img src="assets/img/25.png" style="width: 200px; padding-left: 1em;"></a>
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
            <img src="assets/img/10.jpg" style="width: 300px">
          </div>          
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12" style="text-align: center">
          <span class="text-copy">Aguero 792 Esq. Constitución</span>
          <br>
          <span class="text-copy">Marcos Paz - Pcia. Bs. As.</span>
          <br>
          <span class="text-copy">(0220)-477-4414/ 0979</span>
          <br>
          <span class="text-copy">ignessrl@yahoo.com.ar</span>
          <br>
          <a class="text-copy" href="admin/index.php"><i class="fa fa-lock" aria-hidden="true"></i> Acceso a usuarios registrados</a>
        </div>                   
      </div>
    </div>
  </footer>
  <div class="copy container-fluid">
    <div class="row">
      <div class="col-md-12" style="text-align: center">
        <p class="text-copy">2019 &copy;
        <span class="text-copy">Instituto Ntra. Sra. de Fátima - Todos los derechos reservados</span><br>
        <span class="text-copy">Sitio creado por <a href="http://www.oestedev.com"><img src="assets/img/oestedev.png" style="width: 80px;"></a></span>        
      </div>                 
    </div>    
  </div>


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
