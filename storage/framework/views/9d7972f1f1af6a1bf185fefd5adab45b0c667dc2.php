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
						<th>ID PEMBELI</th>
						<th>NAMA</th>
						<th>STATUS PEMBELI</th>
					</tr>
					<?php $__currentLoopData = $hisacc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->id_pembeli); ?></td>
						<td><?php echo e($p->nama_pembeli); ?></td>
						<td><?php echo e($p->statusacc); ?></td>
						<td>
					
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			
			</div>
  		</div>
	</div>
	
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/hisacc.blade.php ENDPATH**/ ?>