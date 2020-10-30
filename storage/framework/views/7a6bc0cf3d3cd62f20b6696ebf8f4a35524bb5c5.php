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

				<table class="table table-bordered">	<tr>
						<th>id_dev</th>
						<th>nama_Dev</th>
						<th>Email</th>
						<th>Lokasi</th>
						<th>Tahun_Berdiri</th>
					</tr>
					<?php $__currentLoopData = $developer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->id_developer); ?></td>
						<td><?php echo e($p->Nama_Developer); ?></td>
						<td><?php echo e($p->Email); ?></td>
						<td><?php echo e($p->Lokasi); ?></td>
						<td><?php echo e($p->Tahun_Berdiri); ?></td>
						<td>
						<a href="/developers/hapus/<?php echo e($p->id_developer); ?>">Hapus</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			
			</div>
  		</div>
 	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/developers.blade.php ENDPATH**/ ?>