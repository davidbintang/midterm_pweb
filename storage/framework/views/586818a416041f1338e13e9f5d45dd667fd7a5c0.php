<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">	
<body>
	

	<a href="/Daftar_Game"> Beranda</a>
	
	<br/>
	<br/>
 
	<div class="container">
  		<div class="card">
   			<div class="card-body">

				<table class="table table-bordered">
					<tr>
						<th>id_review</th>
						<th>id_developer</th>
						<th>id_game</th>
						<th>Comments</th>
					</tr>
					<?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->id_review); ?></td>
						<td><?php echo e($p->id_developer); ?></td>
						<td><?php echo e($p->id_game); ?></td>
						<td><?php echo e($p->Comments); ?></td>
						<td>
							
						<a href="/review/hapus/<?php echo e($p->id_review); ?>">Hapus</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			</div>
  		</div>
 	</div>		
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/reviewgame.blade.php ENDPATH**/ ?>