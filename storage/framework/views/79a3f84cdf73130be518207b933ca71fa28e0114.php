<!DOCTYPE html>
<html>
<body>
    <a href="/Daftar_Game"> Beranda</a>
	<!-- <a href="/pegawai"> Kembali</a> -->
	
	<br/>
	<br/>
 
	<form action="/Daftar_Game/store" method="post">
    <?php echo e(csrf_field()); ?>

		id_Dev <input type="text" name="id_Dev" required="required"> <br/>
		id_game <input type="text" name="id_game" required="required"> <br/>
		id_pembeli <input type="text" name="id_pembeli" required="required"> <br/>
        id_beli <input type="text" name="id_beli" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\FP_MBD\resources\views/dilakukan.blade.php ENDPATH**/ ?>