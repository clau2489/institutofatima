  <?php
$jobs  = PostData::getAllActive();
?>
  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/frente1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/frente2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/frente3.jpg)">
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
          </div> -->
        </div>
      </div>
    </div>
  </div>
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
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="assets/img/agent-3.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Nivel Inicial</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Salas de 3,4 y 5 años
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="assets/img/agent-4.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Nivel Primario</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="assets/img/agent-5.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Nivel Secundario</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">

                </p>
              </div>
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
    <div class="container center">      
      <h1>Seguinos en nuestras Redes Sociales</h1>
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
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="subscribe-text mb-15">
            <span>Suscribite a nuestro </span>
            <h2>boletín de noticias</h2>
          </div>
        </div>
        <div class="col-md-8">
          <div class="subscribe-wrapper subscribe2-wrapper mb-15">
            <div class="subscribe-form">
              <form action="#">
                <input placeholder="Ingresá tu Correo Electrónico" type="email">
                <button>subscribe <i class="fas fa-long-arrow-alt-right"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </section>
  <!--/ Testimonials End /-->