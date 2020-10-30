<!DOCTYPE html>
<body>
     
    <a href="/Daftar_Game"> Beranda</a><br>
	
	<br/>
	<br/>

    <form action="/lihat2/totharga" method="post">
		<?php echo e(csrf_field()); ?>

		nama <input type="text" name="namas" required="required"> <br/>
		<input type="submit" value="Cari Data">
	</form>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/lihat2.blade.php ENDPATH**/ ?>