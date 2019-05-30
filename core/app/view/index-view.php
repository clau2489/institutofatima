<?php
    $jobs  = PostData::getAllPost();
  ?>

  <!--/ Carousel Star /-->
  <section class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slider-a.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
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
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slider-b.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top">
                    <h1 class="intro-title mb-4">
                      Educación de calidad</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slider-c.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top">
                    <h1 class="intro-title mb-4">
                      #insfa marcos paz</h1>
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
  <section class="section-agents section-t8 niveles">
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
          <div class="col-md-3 nivel">
             <div class="card bg-light">
                <a href="./?view=inicial"><img class="card-img-top" src="assets/img/inicial.jpg"></a>
                <div class="card-body">
                   <h5 class="card-title border-bottom pb-3">Nivel Inicial</h5>
                   <p class="card-text">Jardín de Infantes a partir de los 2 años.</p>
                </div>
             </div>
          </div>
          <div class="col-md-3 nivel">
             <div class="card bg-light">
                <a href="./?view=primaria"><img class="card-img-top" src="assets/img/primaria.jpg" alt="Card image cap"></a>
                <div class="card-body">
                   <h5 class="card-title border-bottom pb-3">Nivel Primario</h5>
                   <p class="card-text">A partir de los 6 años.</p>
                </div>
             </div>
          </div>
          <div class="col-md-3 nivel">
             <div class="card bg-light">
                <a href="./?view=secundaria"><img class="card-img-top" src="assets/img/secundario.jpg" alt="Card image cap"></a>
                <div class="card-body">
                   <h5 class="card-title border-bottom pb-3">Nivel Secundario</h5>
                   <p class="card-text">Orientación en Humanidades y Cs. Sociales - Economía y Gestión de las Organizaciones</p>
                </div>
             </div>
          </div>
          <div class="col-md-3 nivel">
             <div class="card bg-light">
                <a href="./?view=pascal"><img class="card-img-top" src="assets/img/universitaria.jpg" alt="Card image cap"></a>
                <div class="card-body">
                   <h5 class="card-title border-bottom pb-3">Nivel Universitario</h5>
                   <p class="card-text">Convenio con Universidad Blas Pascal</p>
                </div>
             </div>
          </div>                    
       </div>        
    </div>
  </section>
  <!--/ Agents End /-->


  <!--/ News Grid Star -->
  <section class="grid section-t3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-t3">
          <h2 class="title-a">Últimas Noticias</h2>
        </div>    
      </div>
      <div class="row">
        <?php if(count($jobs)>0):?>
        <?php foreach($jobs as $jb):?>      
        <div class="col-md-4">
          <div class="cortar">
            <a href="./?view=post&id=<?php echo $jb->id; ?>" class="thumbnail">
              <?php if($jb->image!=""):?>
              <img src="admin/uploads/<?php echo $jb->image; ?>" class="img-news">
              <?php endif; ?>
              <!-- <p><?php $nueva_fecha = date("d-m-Y",strtotime($jb->created_at)); echo $nueva_fecha; ?></p> -->
              <br>
              <h1 href="./?view=post&id=<?php echo $jb->id; ?>" class="title-new"><?php echo $jb->title; ?></h1>
              <span href="./?view=post&id=<?php echo $jb->id; ?>" class="date-b"><?php echo $jb->brief; ?></span>
              <!--<p><?php echo $jb->content; ?></p> -->
            </a>            
          </div>
        </div>
        <?php endforeach; ?>
      </div>     
      <?php else:?>
      <div class="row">
        <div class="col-md-12">
          <p class="alert alert-warning">No hay artículos publicados por el momento!</p>
          <?php endif; ?>
          <p class="title-mas"><a href="./?view=blog"> Más noticias</a></p>            
        </div>        
      </div>
  </section>
  <!--/ News Grid End /-->

  <!--/ Testimonials Star 
  <section class="section-testimonials nav-arrow-a">
    <div class="container center">
      <div class="row">
        <div class="col-md-12 center">     
          <h1 class="title-single">Seguinos en nuestras Redes Sociales y Enterate todas las novedades acerca de nuestra Institución.</h1>
        </div>        
      </div>
      <div class="row">
        <div class="col-md-4">
          <a class="socialbox facebook" href="https://www.facebook.com/ignes.srl">
            <div class="social-icon">
              <i class="fa fa-fw fa-facebook"></i>
            </div>
            <div class="description">
              <span class="ng-binding-shares"></span>
              <span class="ng-binding-likes"></span>
              <span>"Me gusta" Facebook</span>
            </div>
          </a>                
        </div>              
        <div class="col-md-4">
          <a class="socialbox twitter" href="https://twitter.com/cghubs">
            <div class="social-icon">
              <i class="fa fa-fw fa-twitter"></i>
            </div>
            <div class="description">
              <span class="ng-binding"></span>
              <span>Seguinos en Twitter</span>
            </div>
          </a>                
        </div>
        <div class="col-md-4">
          <a class="socialbox pinterest" href="https://www.instagram.com/insfa_marcospaz">
            <div class="social-icon">
              <i class="fa fa-fw fa-instagram"></i>
            </div>
            <div class="description">
              <span class="ng-binding"></span>
              <span>Seguinos en Instagram</span>
            </div>
          </a>                
        </div>       
      </div>
      <br>
      <div class="row">
        <div class="col-md-12 center">
          <h1 class="title-single"> </h1>
        </div>        
      </div>      
    </div>
  </section>

Testimonials End /-->