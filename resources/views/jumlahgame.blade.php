<!DOCTYPE html>
<html>
	
<body>
    <a href="/Daftar_Game"> Beranda</a> <br>
	<a href="/pembeli"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/jumlahgame/lihat" method="post">
		{{ csrf_field() }}
		genres <input type="text" name="genres" required="required"> <br/>

		<input type="submit" value="Cari Data">
	</form>

</body>
</html>