<html>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
<body>
 

    <a href="/Daftar_Game"> Beranda</a><br>
	
	<br/>
	<br/>
    
	<div class="container">
  		<div class="card">
   			<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>Nama Akun</th>
						<th>Tanggal Beli</th>
						<th>Nama Game</th>
					</tr>
					@foreach($join as $p)
					<tr>
						<td>{{ $p->nama_pembeli }}</td>
						<td>{{ $p->tanggal_beli }}</td>
						<td>{{ $p->nama_game }}</td>
					</tr>
					@endforeach
				</table>
 
			</div>
  		</div>
 	</div>
	 
</body>
</html>