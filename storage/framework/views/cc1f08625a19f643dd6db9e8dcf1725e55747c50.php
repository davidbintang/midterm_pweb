<!DOCTYPE html>
<html>
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
						<th>ID TRANSAKSI</th>
						<th>ID PEMBELI</th>
						<th>TANGGAL TRANSAKSI</th>
					</tr>
					<?php $__currentLoopData = $uprate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->id_beli); ?></td>
						<td><?php echo e($p->id_pembeli); ?></td>
						<td><?php echo e($p->Tanggal_Beli); ?></td>
						<td>
					
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			</div>
  		</div>
	</div>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/uprate.blade.php ENDPATH**/ ?>