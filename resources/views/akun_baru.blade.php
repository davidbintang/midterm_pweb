<html>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

<body>
 

    <a href="/Daftar_Game"> Beranda</a>
	
	<br/>
	<br/>
	<div class="container">
  		<div class="card">
   			<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>id_pembeli</th>
						<th>Nama_pembeli</th>
						<th>Waktu Daftar</th>
					</tr>
					@foreach($akun_baru as $p)
					<tr>
						<td>{{ $p->id_pembeli }}</td>
						<td>{{ $p->Nama_pembeli }}</td>
						<td>{{ $p->Tanggal}}</td>
					</tr>
					@endforeach
				</table>
 
 			</div>
  		</div>
	</div>

</body>
</html>