<html>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">

<body>
 

    <a href="/Daftar_Game"> Beranda</a>
	<a href="/pembelian/form">Tambah Akun</a>
	
	<br/>
	<br/>
	
	<a >Cari Lama_Game(Umur)</a> 
	<form action="/pembelian" method="post">
    <?php echo e(csrf_field()); ?>

		id_game <input type="text" name="id_game" required="required"> <br/>
		<input type="submit" value="cek_umur">
	</form>

	<?php if($cekumur != 0): ?>
	{
		
		<div class="container">
  			<div class="card">
   				<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>Nama Game</th>
						<th>umur_game</th>
					</tr>

					<?php $__currentLoopData = $umur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->Nama_Game); ?></td>
						<td><?php echo e($p->gameage); ?></td>
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
						<th>id_beli</th>
						<th>id_Pembeli</th>
						<th>Tanggal_Beli</th>
					</tr>
					<?php $__currentLoopData = $pembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->id_beli); ?></td>
						<td><?php echo e($p->id_pembeli); ?></td>
						<td><?php echo e($p->Tanggal_Beli); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			</div>
  		</div>
	</div>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/pembelian.blade.php ENDPATH**/ ?>