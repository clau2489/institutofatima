  <?php
    $jobs  = PostData::getAllActive();
  ?>

  <!--/ Carousel Star /-->
  <section class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table"></div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slidera.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table"></div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/sliderb.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                    <h1 class="intro-title mb-4">
                      25 años Formando buenas personas</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Carousel end /-->

  <!--/ Agents Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Niveles</h2>
            </div>
          </div>
        </div>
      </div>
       <div class="row">
          <div class="col-md-3">
             <div class="card bg-light">
                <img class="card-img-top" src="assets/img/inicial.jpg">
                <div class="card-body">
                   <h5 class="card-title border-bottom pb-3">Nivel Inicial</h5>
                   <p class="card-text">Jardin de Infantes a partir de los 2 años.</p>
                   <a href="./?view=inicial" class="btn btn-sm btn-info float-right">Leer más</a>
                </div>
             </div>
          </div>
          <div class="col-md-3">
             <div class="card bg-light">
                <img class="card-img-top" src="assets/img/primaria.jpg" alt="Card image cap">
                <div class="card-body">
                   <h5 class="card-title border-bottom pb-3">Nivel Primario</h5>
                   <p class="card-text">A partir de los 6 años.</p>
                   <a href="./?view=primaria" class="btn btn-sm btn-info float-right">Leer más</a>
                </div>
             </div>
          </div>
          <div class="col-md-3">
             <div class="card bg-light">
                <img class="card-img-top" src="assets/img/cartelera.jpg" alt="Card image cap">
                <div class="card-body">
                   <h5 class="card-title border-bottom pb-3">Nivel Secundario</h5>
                   <p class="card-text">Orientación en Humanidades y Cs. Sociales y Economia y Gestión de las Organizaciones</p>
                   <a href="#" class="./?view=secundaria">Leer más</a>
                </div>
             </div>
          </div>
          <div class="col-md-3">
             <div class="card bg-light">
                <img class="card-img-top" src="assets/img/universitaria.jpg" alt="Card image cap">
                <div class="card-body">
                   <h5 class="card-title border-bottom pb-3">Nivel Universitario</h5>
                   <p class="card-text">Convenio con Universidad Blas Pascal</p>
                   <a href="#" class="btn btn-sm btn-info float-right">Leer más</a>
                </div>
             </div>
          </div>                    
       </div>        
    </div>
  </section>
  <!--/ Agents End /-->

  <!--/ News Grid Star /-->
  <section class="news-grid grid section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Últimas Noticias</h2>
            </div>
          </div>
        </div>
      </div>      
      <div class="row">
        <?php if(count($jobs)>0):?>
        <?php foreach($jobs as $jb):?>
        <div class="col-md-4">          
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <?php if($jb->image!=""):?>
                <img src="admin/uploads/<?php echo $jb->image; ?>" class="img-news">
              <?php endif; ?>
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b"></a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="./?view=post&id=<?php echo $jb->id; ?>"><?php echo $jb->title; ?></a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b"><?php echo $jb->brief; ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php else:?>
          <p class="alert alert-warning">No hay articulos publicados por el momento!</p>
        <?php endif; ?>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ News Grid End /-->

  <!--/ Testimonials Star /-->
  <section class="section-testimonials nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="container center">      
            <h1 class="white">Seguinos en nuestras Redes Sociales</h1>
            <br>
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fas fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fas fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fas fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>        
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonials End /-->