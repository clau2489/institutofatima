<?php
$jb  = PostData::getById($_GET["id"]);
?>
<br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <?php if($jb->image!=""):?>
      <img src="admin/uploads/<?php echo $jb->image; ?>" class="img-responsive" >
      <?php endif; ?>
      <br>
    </div>
    <div class="col-md-6">
      <h1><?php echo $jb->title; ?></h1>
        <div class="panel-body">
          <h2><?php echo $jb->brief; ?></h2>
          <p><?php echo $jb->content; ?></p>
        </div>
        <div class="panel panel-default">
        <?php
        $comments  = CommentData::getPublicByPost($jb->id);
        ?>
          <div class="panel-heading">Comentarios</div>
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
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre" required>
            </div>
            <!--
            <div class="form-group">
              <label for="exampleInputEmail1">Correo electronico</label>
              <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Correo electronico">
            </div> -->
            <div class="form-group">
              <label for="exampleInputEmail1">Comentario</label>
              <textarea name="comment" class="form-control" id="exampleInputEmail1" placeholder="Comentarios" required rows="3"></textarea>
            </div>
            <!--<div class="checkbox">
              <label>
                <input type="checkbox" name="accept" required> Acepto los terminos y condiciones
              </label>
            </div> -->
            <button type="submit" class="btn btn-default">Enviar datos</button>
          </form>
        </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>