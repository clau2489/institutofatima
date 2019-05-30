<?php
$jobs  = PostData::getAllActive();
?>

<div class="container section-t8">
	<h1>Todas las noticias</h1>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">

				<?php if(count($jobs)>0):?>
					<?php foreach($jobs as $jb):?>
					<div class="col-md-4">
						<?php if($jb->image!=""):?>
						<img src="admin/uploads/<?php echo $jb->image; ?>" class="img-news">
						<?php endif; ?>
						<h4><?php echo $jb->title; ?></h4>
						<p><?php echo $jb->brief; ?></p>
						<!--<p><?php echo $jb->content; ?></p> -->
						<a href="./?view=post&id=<?php echo $jb->id; ?>" class="btn btn-primary">Leer</a>
					</div>
					<?php endforeach; ?>
					<?php else:?>
					<p class="alert alert-warning">No hay articulos publicados por el momento!</p>
					<?php endif; ?>

			</div>
		</div>
	</div>
</div>
<br><br><br><br>