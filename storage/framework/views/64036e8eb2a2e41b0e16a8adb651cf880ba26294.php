<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 

    <a href="/Daftar_Game"> Beranda</a>
	
	<br/>
	<br/>
    
	<table border="1">
		<tr>
			<th>game_id</th>
            <th>waktu_diskon</th>
			<th>nama_game</th>
			<th>Harga sebelum diskon</th>
			<th>Harga setelah diskon</th>
		</tr>
		<?php $__currentLoopData = $pricelogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($p->g_id); ?></td>
			<td><?php echo e($p->timechange); ?></td>
			<td><?php echo e($p->namagame); ?></td>
			<td><?php echo e($p->oldprice); ?></td>
            <td><?php echo e($p->newprice); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
 
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/pricelog.blade.php ENDPATH**/ ?>