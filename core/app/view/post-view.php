<?php
$jb  = PostData::getById($_GET["id"]);
?>
<br><br><br><br><br><br>
<!--/ News Single Star /-->
<section class="news-single nav-arrow-b section t-8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <span class="color-text-a">19 Apr. 2017</span>
        <h1 class="title-news"><?php echo $jb->title; ?></h1>
        <br><br>
        <span class="color-text-a"><h4 class="subtitle"><?php echo $jb->brief; ?></h4></span>        
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="news-img-box">
          <?php if($jb->image!=""):?>
          <img src="admin/uploads/<?php echo $jb->image; ?>" class="img-fluid" >
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="post-content color-text-a">
          <p class="post-intro">
            <?php echo $jb->content; ?>
          </p>
        </div>
        <div class="post-footer">
          <div class="post-share">
            <span>Compartir en: </span>
            <ul class="list-inline socials">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
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
    </div>
  </div>
</section>
<!--/ News Single End /-->
<br><br><br><br><br><br>