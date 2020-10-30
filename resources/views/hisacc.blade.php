<!DOCTYPE html>
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
						<th>ID PEMBELI</th>
						<th>NAMA</th>
						<th>STATUS PEMBELI</th>
					</tr>
					@foreach($hisacc  as $p)
					<tr>
						<td>{{ $p->id_pembeli }}</td>
						<td>{{ $p->nama_pembeli }}</td>
						<td>{{ $p->statusacc }}</td>
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