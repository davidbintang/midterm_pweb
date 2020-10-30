<!DOCTYPE html>
<body>
 

    <a href="/Daftar_Game"> Beranda</a><br>
	
	<br/>
	<br/>
    
	<table border="1">
		<tr>
			<th>jumlah</th>
		</tr>
		<?php $__currentLoopData = $Daftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
            <td><?php echo e($p->jumlah); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
 
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/hitung.blade.php ENDPATH**/ ?>