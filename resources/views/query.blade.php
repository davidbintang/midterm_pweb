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
							<th>Nama Pembeli</th>
							<th>Nama Game</th>
						</tr>
						@foreach($query1 as $p)
						<tr>
							<td>{{ $p->Nama_pembeli }}</td>
							<td>{{ $p->Nama_Game }}</td>
							<td>
						
							</td>
						</tr>
						@endforeach
					</table>

				</div>
  	</div>
	</div>			
    
		<br>
    <br>
<div class="container">
  <div class="card">
  	<div class="card-body">

    			<table class="table table-bordered">
						<tr>
						<th>Nama_Game</th>
					</tr>
					@foreach($query2 as $q)
					<tr>
						<td>{{ $q->Nama_Game }}</td>
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