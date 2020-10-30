<html>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
<body>
 

    <a href="/Daftar_Game"> Beranda</a><br>
    <a href="/pembeli/tambah">Tambah Akun</a>
	
	<br/>
	<br/>

	<div class="container">
  		<div class="card">
   			<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>id_pembeli</th>
						<th>nama_Pembeli</th>
						<th>Jenis_Kelamin</th>
					</tr>
					@foreach($pembeli as $p)
					<tr>
						<td>{{ $p->id_pembeli }}</td>
						<td>{{ $p->Nama_pembeli }}</td>
						<td>{{ $p->Jenis_kelamin }}</td>
						<td><a href="/pembeli/hapus/{{ $p->id_pembeli }}">Hapus</a>
						</td>
					</tr>
					@endforeach
					
				</table>
 
			</div>
  		</div>
	</div>

</body>
</html>