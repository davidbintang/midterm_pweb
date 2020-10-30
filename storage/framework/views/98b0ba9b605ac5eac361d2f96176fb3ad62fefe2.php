<html>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">
<body>
 

    <a href="/Daftar_Game"> Beranda</a>
	
	<br/>
	<br/>
    

	<br/>
	<form action="/price_log" method="post">
    <?php echo e(csrf_field()); ?>

		id_game <input type="text" name="id_game" required="required"> <br/>
		harga   <input type="text" name="harga" required="required"> <br/>
		<input type="submit" value="Ubah harga">
	</form>
	
	<br/>
    <br/>

	<div class="container">
  		<div class="card">
   			<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>game_id</th>
						<th>waktu_diskon</th>
						<th>nama_game</th>
						<th>Harga sebelum diskon</th>
						<th>Harga setelah diskon</th>
					</tr>
					<?php $__currentLoopData = $price_log; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->g_id); ?></td>
						<td><?php echo e($p->timechange); ?></td>
						<td><?php echo e($p->nama_game); ?></td>
						<td><?php echo e($p->oldprice); ?></td>
						<td><?php echo e($p->newprice); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			</div>
  		</div>
	</div>
 
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/price_log.blade.php ENDPATH**/ ?>