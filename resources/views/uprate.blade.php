<!DOCTYPE html>
<html>
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
						<th>ID TRANSAKSI</th>
						<th>ID PEMBELI</th>
						<th>TANGGAL TRANSAKSI</th>
					</tr>
					@foreach($uprate  as $p)
					<tr>
						<td>{{ $p->id_beli }}</td>
						<td>{{ $p->id_pembeli }}</td>
						<td>{{ $p->Tanggal_Beli }}</td>
						<td>
					
						</td>
					</tr>
					@endforeach
				</table>
			</div>
  		</div>
	</div>
 
</body>
</html>