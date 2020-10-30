<!DOCTYPE html>
<body>
     
    <a href="/Daftar_Game"> Beranda</a><br>
	
	<br/>
	<br/>

    <form action="/lihat2/totharga" method="post">
		{{ csrf_field() }}
		nama <input type="text" name="namas" required="required"> <br/>
		<input type="submit" value="Cari Data">
	</form>
 
</body>
</html>