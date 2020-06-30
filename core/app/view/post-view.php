<?php
$jb  = PostData::getById($_GET["id"]);
?>


<script language="javascript">
    function fbshareCurrentPage()
    {window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 
    'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
    return false; }
</script>

  <!-- slider -->
  <?php if($jb->image!=""):?>
  <div class="hero-wrap" style="background-image: url('admin/uploads/<?php echo $jb->image; ?>');" data-stellar-background-ratio="0.5">
  <?php endif; ?>  
    <div class="overlays"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate">
          <br><br><br><br><br><br>
          <h1 class="mt-4"><?php echo $jb->title; ?></h1>
          <div class="row">
            <div class="col-md-12">
              <div class="text">
                <p><?php echo $jb->brief; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--/ News Single Star /-->
<section class="news-single nav-arrow-b section t-8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">      
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="color-text-a">
          <p><?php $nueva_fecha = date("d-m-Y",strtotime($jb->created_at)); echo $nueva_fecha; ?></p>
          <?php echo $jb->content; ?>
        </div>
        <div class="post-footer">
          <div class="post-share">
           <a href="javascript:fbshareCurrentPage()" target="_blank" alt="Share on Facebook" style="font-size: 14px; background-color: #0062cc; color: white; padding: 10px; border-radius: 10px;"><i class="fa fa-share-alt" aria-hidden="true"></i> Compartir en Facebook</a>
          </div>
        </div>


        <div class="panel panel-default">
          <?php
          $comments  = CommentData::getPublicByPost($jb->id);
          ?>
          <div class="panel-body">
            <?php foreach($comments as $com):?>
            <label><?php echo $com->name; ?></label>
            <p><?php echo $com->comment; ?></p>
            <?php endforeach ; ?>
          </div>
        </div>
        <div class="panel-body">
          <form method="post" action="./?action=send" enctype="multipart/form-data">
            <input type="hidden" name="post_id" value="<?php echo $jb->id; ?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" required>
            </div>
            <!--
            <div class="form-group">
              <label for="exampleInputEmail1">Correo electronico</label>
              <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Correo electronico">
            </div> -->
            <div class="form-group">
              <label for="exampleInputEmail1">Comentario</label>
              <textarea name="comment" class="form-control" id="exampleInputEmail1" required rows="3"></textarea>
            </div>
            <!--<div class="checkbox">
              <label>
                <input type="checkbox" name="accept" required> Acepto los terminos y condiciones
              </label>
            </div> -->
            <button type="submit" class="btn btn-default">Comentar</button>
          </form>
        </div>        
      </div>
      <div class="col-sm-2">
        
      </div>
      <div class="col-sm-4 text-center">
        <br><br>
        <img src="img/historia.jpg" style="width: 100%;">
        <br>
        <br>
        <img src="img/logo.png" style="width: 100%">
        <br>
        <br>
        <img src="img/universitaria.jpg" style="width: 100%">
        <br>

      </div>        
    </div>
  </div>
</section>
<!--/ News Single End /-->
<br><br><br><br><br><br>