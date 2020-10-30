<!DOCTYPE html>
<html>
<body>
    <a href="/Daftar_Game"> Beranda</a> <br>
	<a href="/pembeli"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/totalnya/hitung" method="post">
		<?php echo e(csrf_field()); ?>

		Jenis kelamin <input type="text" name="Jenis_kelamin" required="required"> <br/>

		<input type="submit" value="Cari Data">
	</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/totalnya.blade.php ENDPATH**/ ?>