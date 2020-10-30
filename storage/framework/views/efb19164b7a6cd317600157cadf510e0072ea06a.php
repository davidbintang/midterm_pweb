<!DOCTYPE html>
<html>
<body>
    <a href="/Daftar_Game"> Beranda</a> <br>
	<a href="/pembeli"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pembeli/store" method="post">
		<?php echo e(csrf_field()); ?>

		id_pembeli <input type="text" name="id_pembeli" required="required"> <br/>
		Nama_pembeli <input type="text" name="Nama_pembeli" required="required"> <br/>
		Jenis_kelamin <input type="text" name="Jenis_kelamin" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/tambah.blade.php ENDPATH**/ ?>