<!DOCTYPE html>
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
						<th>Nama Developer</th>
						<th>Total Harga Semua Game</th>
					</tr>
					@foreach($Tot as $p)
					<tr>
						<td>{{ $nama->namas}}</td>
						<td>{{ $p->Total}}</td>
					</tr>
					@endforeach
				</table>
 
			</div>
  		</div>
	</div>
 
</body>
</html>