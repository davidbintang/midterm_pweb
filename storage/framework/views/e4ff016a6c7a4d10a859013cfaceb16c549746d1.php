<!DOCTYPE html>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">

<body>
 

    <a href="/Daftar_Game"> Beranda</a><br>
	
	<br/>
	<br/>
    
	<div class="container">
  		<div class="card">
   			<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>Genre</th>
						<th>jumlah</th>
					</tr>
					<?php $__currentLoopData = $Daftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($genre->genres); ?></td>
						<td><?php echo e($p->jumlahs); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
	
			</div>
  		</div>
	</div>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/lihat.blade.php ENDPATH**/ ?>