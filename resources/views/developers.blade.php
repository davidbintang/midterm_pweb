<html>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<body>
 

    <a href="/Daftar_Game"> Beranda</a>
	
	<br/>
	<br/>
    
	<div class="container">
  		<div class="card">
   			<div class="card-body">

				<table class="table table-bordered">	<tr>
						<th>id_dev</th>
						<th>nama_Dev</th>
						<th>Email</th>
						<th>Lokasi</th>
						<th>Tahun_Berdiri</th>
					</tr>
					@foreach($developer as $p)
					<tr>
						<td>{{ $p->id_developer }}</td>
						<td>{{ $p->Nama_Developer }}</td>
						<td>{{ $p->Email }}</td>
						<td>{{ $p->Lokasi }}</td>
						<td>{{ $p->Tahun_Berdiri }}</td>
						<td>
						<a href="/developers/hapus/{{ $p->id_developer }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>
			
			</div>
  		</div>
 	</div>
</body>
</html>