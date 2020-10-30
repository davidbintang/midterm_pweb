<!DOCTYPE html>
<html>
<body>
    <a href="/Daftar_Game"> Beranda</a> <br>
	<a href="/pembelian"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pembelian/masukkin" method="post">
		{{ csrf_field() }}
		id_beli <input type="text" name="id_beli" required="required"> <br/>
		id_pembeli <input type="text" name="id_pembeli" required="required"> <br/>
		Tanggal_Beli <input type="date" name="Tanggal_Beli" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>