<html>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">
<body>
 

    <a href="/Daftar_Game"> Beranda</a><br>
	
	<br/>
	<br/>
	
	<a >Cari Total Pembelian dari Pembeli</a> 
	<form action="/notin" method="post">
    <?php echo e(csrf_field()); ?>

		namapembeli <input type="text" name="namapembeli" required="required"> <br/>
		<input type="submit" value="cek_pembeli">
	</form>

	<?php if($cekbeli != 0): ?>
	{
		
		<div class="container">
  			<div class="card">
   				<div class="card-body">

						<table class="table table-bordered">
							<tr>
								<th>Nama Pembeli</th>
								<th>Total Pembelian</th>
							</tr>

							<?php $__currentLoopData = $cekpembeli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($p->Nama_pembeli); ?></td>
								<td><?php echo e($p->total); ?></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>

				</div>
  			</div>
		</div>
	
	}	
	<?php endif; ?>


	<br/>
	<br/>


	<div class="container">
  			<div class="card">
   				<div class="card-body">

						<table class="table table-bordered">
							<tr>
								<th>Nama Pembeli</th>
							</tr>
							<?php $__currentLoopData = $notin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($p->Nama_pembeli); ?></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
				</div>
  		</div>
	</div>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/notin.blade.php ENDPATH**/ ?>