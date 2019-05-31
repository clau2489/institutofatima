<?php
$jobs  = PostData::getAllActive();
?>
<br><br><br>
<div class="container section-t8 ">
	<h1 class="title-a form-a">Todas las noticias</h1>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<?php if(count($jobs)>0):?>
					<?php foreach($jobs as $jb):?>
					<div class="col-md-4">
						<?php if($jb->image!=""):?>
						<a href="./?view=post&id=<?php echo $jb->id; ?>"><img src="admin/uploads/<?php echo $jb->image; ?>" class="img-news"></a>
						<?php endif; ?>
						<a href="./?view=post&id=<?php echo $jb->id; ?>"><h4><?php echo $jb->title; ?></h4></a>
						<a href="./?view=post&id=<?php echo $jb->id; ?>"><p><?php echo $jb->brief; ?></p></a>
					</div>
					<?php endforeach; ?>
					<?php else:?>
					<p class="alert alert-warning">No hay articulos publicados por el momento!</p>
					<?php endif; ?>

			</div>
		</div>
	</div>
</div>
