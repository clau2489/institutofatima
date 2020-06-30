<?php
  $jobs  = PostData::getAllPost();
?>

  <!-- slider -->
  <div class="hero-wrap" style="background-image: url('img/index.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate">
          <h1 class="mb-4 mb-md-0">25 años formando buenas personas</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="text">
                <p>Enterate las ultimas novedades de nuestra institución</p>
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

  <!--/ last News -->
  <section id="lastnews" class="ftco-section">
    <div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		  <h2 class="title-a">Últimas Noticias</h2>
		</div>    
	</div>


	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">         
		  <div class="case">
		    <div class="row">
		      <p>29-05-2020</p>
		    </div>
		    <div class="row">
		      <h2 class="title-new">Cronograma de Videoconferencias Nivel Secundario</h2>
		      <img src="img/videoconferencias.jpg" width="100%">
		    </div>
		    <div class="row">
		      <span class="subheading"><br>
		      <a href="img/vc.pdf" download="cronograma" target="_blank"> >> Descargar cronograma >></a></span>
		    </div>            
		  </div>
		  <hr>
		</div>
		<div class="col-md-1">
		</div>        
	</div>

	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">         
		  <div class="case">
		    <div class="row">
		      <p>23-04-2020</p>
		    </div>
		    <div class="row">
		      <h2 class="title-new">Videoconferencias con Jitsi Meet</h2>
		      <img src="img/jitsi.jpg" width="100%">
		    </div>
		    <div class="row">
		      <span class="subheading">Presentamos un tutorial apuntado a los Alumnos y Familias que nos enseña como realizar videoconferencias entre docentes y alumnos por medio de la aplicación Jitsi Meet.<br>
		      <a href="img/01.pdf" download="JitsiMeet - Insfa2020" target="_blank"> >> Clic aquí para descargar el material >></a></span>
		    </div>            
		  </div>
		  <hr>
		</div>
		<div class="col-md-1">
		</div>        
	</div>

	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">         
		  <div class="case">
		    <div class="row">
		      <p>16-03-2020</p>
		    </div>
		    <div class="row">
		      <h2 class="title-new">Video Tutorial Google Classroom</h2>
		      <video width="100%" height="100%" controls>
		        <source src="img/Presentación_fatima.mp4" type="video/mp4">
		        <source src="img/Presentación_fatima.ogg" type="video/ogg">
		      </video>            
		    </div>
		    <div class="row">
		      <span class="subheading">Presentamos un video tutorial de Google Classroom que será la plataforma digital que utilizaremos para realizar la continuidad Pedagógica</span>
		    </div>            
		  </div>
		  <hr>
		</div>
		<div class="col-md-1">
		</div>        
	</div>      
      
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
          <?php if(count($jobs)>0):?>
          <?php foreach($jobs as $jb):?>          
          <div class="case">
            <div class="row">
              <p><?php $nueva_fecha = date("d-m-Y",strtotime($jb->created_at)); echo $nueva_fecha; ?></p>
            </div>
            <div class="row">
              <h2 class="title-new" href="./?view=post&id=<?php echo $jb->id; ?>"><?php echo $jb->title; ?></h2>                
                <?php if($jb->image!=""):?>                
                <a href="./?view=post&id=<?php echo $jb->id; ?>" class="img w-100 mb-3 mb-md-0" style="background-image: url(admin/uploads/<?php echo $jb->image; ?>);"></a>
              <?php endif; ?>              
            </div>
            <div class="row">
              <span href="./?view=post&id=<?php echo $jb->id; ?>" class="subheading"><?php echo $jb->brief; ?></span>
            </div>
            <div class="row">
              <p><?php echo $jb->content; ?></p>
            </div>
          </div>
          <hr>
          <?php endforeach; ?>
        </div>
        <div class="col-md-1">
        </div>        
      </div>

      <?php else:?>

      <div class="row">
        <div class="col-md-12">
          <p class="alert alert-warning">No hay artículos publicados por el momento!</p>
          <?php endif; ?>
          <p class="hipervinculo text-center"><a href="./?view=blog"> Clic aquí para más noticias >> </a></p>            
        </div>        
      </div>
  </section>