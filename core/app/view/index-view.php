  <?php
$jobs  = PostData::getAllActive();
?>
  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">          
          <!--<div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Alira
                      <br> Roan Road One</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
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
  <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Albert & Erika</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="assets/img/testimonial-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Pablo & Emma</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonials End /-->


    <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Lifestyle</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                convallis a pellentesque
                nec, egestas non nisi.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Loans</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                aliquet elit, eget tincidunt
                nibh pulvinar a.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Sell</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                convallis a pellentesque
                nec, egestas non nisi.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->
  <br><br><br><br><br>