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
						<th>id_review</th>
						<th>id_developer</th>
						<th>id_game</th>
						<th>Comments</th>
					</tr>
					@foreach($review as $p)
					<tr>
						<td>{{ $p->id_review }}</td>
						<td>{{ $p->id_developer }}</td>
						<td>{{ $p->id_game }}</td>
						<td>{{ $p->Comments }}</td>
						<td>
							
						<a href="/review/hapus/{{ $p->id_review }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
  		</div>
 	</div>		
 
</body>
</html>