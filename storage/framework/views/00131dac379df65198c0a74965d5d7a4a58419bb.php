<html>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">
<body>
 

    <a href="/Daftar_Game"> Beranda</a><br>
    <a href="/pembeli/tambah">Tambah Akun</a>
	
	<br/>
	<br/>

	<div class="container">
  		<div class="card">
   			<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>id_pembeli</th>
						<th>nama_Pembeli</th>
						<th>Jenis_Kelamin</th>
					</tr>
					<?php $__currentLoopData = $pembeli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->id_pembeli); ?></td>
						<td><?php echo e($p->Nama_pembeli); ?></td>
						<td><?php echo e($p->Jenis_kelamin); ?></td>
						<td><a href="/pembeli/hapus/<?php echo e($p->id_pembeli); ?>">Hapus</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</table>
 
			</div>
  		</div>
	</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/pembeli.blade.php ENDPATH**/ ?>