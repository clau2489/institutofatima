<?php
$jobs  = PostData::getAllActive();
?>

  <!-- slider -->
  <div class="hero-wrap" style="background-image: url('img/blog.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlays"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate">
          <h1 class="mb-4 mb-md-0">Todas las noticias</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="text">
                <p>Todas nuestras noticias</p>
                <div class="mouse">
                  <a href="#" class="mouse-icon">
                    <div class="mouse-wheel">                      
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <br><br><br>
          <div class="row">
            <div class="col-md-12 ftco-animate" style="text-align: center;">
              <a href="#lastnews"><button class="btn btn-light"> >> </button></a>
            </div>              
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- all News -->
  <section id="allnews" class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="">
            <div class="row">
  		        <?php if(count($jobs)>0):?>
      				<?php foreach($jobs as $jb):?>
      				<div class="col-md-3">
                <div class="allnew">
                <?php if($jb->image!=""):?>
                <a href="./?view=post&id=<?php echo $jb->id; ?>">
                  <img src="admin/uploads/<?php echo $jb->image; ?>"style="height: 200px; width: 100%"></a>
                <?php endif; ?>
                <p style="font-size: 12px; color: black; margin-top: 2px;"><?php $nueva_fecha = date("d-m-Y",strtotime($jb->created_at)); echo $nueva_fecha; ?></p>                
                <a href="./?view=post&id=<?php echo $jb->id; ?>"><h4 style="font-size: initial; color: blueviolet;"><?php echo $jb->title; ?></h4></a>
                <a href="./?view=post&id=<?php echo $jb->id; ?>"><p style="font-size: 12px; color: black;"><?php echo $jb->brief; ?></p></a>                  
                </div>
      				</div>
      				<?php endforeach; ?>
      				<?php else:?>
      				<p class="alert alert-warning">No hay articulos publicados por el momento!</p>
      				<?php endif; ?>   
          	</div>
          </div>
      	</div>
      </div>
     </div>
  </section>