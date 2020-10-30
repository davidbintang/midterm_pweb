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
			<th>NAMA GAME</th>
		</tr>
		@foreach($reviewedgame as $p)
		<tr>
			<td>{{ $p->nama_game }}</td>
		</tr>
		@endforeach
	</table>
 
		</div>
  	</div>
</div>

</body>
</html>