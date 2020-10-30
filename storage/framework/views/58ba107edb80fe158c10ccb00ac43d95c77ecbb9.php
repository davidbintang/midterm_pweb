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
						<th>id_pembeli</th>
						<th>Nama_pembeli</th>
						<th>Waktu Daftar</th>
					</tr>
					<?php $__currentLoopData = $akun_baru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->id_pembeli); ?></td>
						<td><?php echo e($p->Nama_pembeli); ?></td>
						<td><?php echo e($p->Tanggal); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
 
 			</div>
  		</div>
	</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/akun_baru.blade.php ENDPATH**/ ?>