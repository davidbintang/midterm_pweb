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
						<th>Nama_pembeli</th>
						<th>Nama_game</th>
					</tr>
					@foreach($miskin as $p)
					<tr>
						<td>{{ $p->Nama_pembeli }}</td>
						<td>{{ $p->Nama_Game}}</td>
					</tr>
					@endforeach
				</table>
 
			</div>
  		</div>
	</div>

</body>
</html>