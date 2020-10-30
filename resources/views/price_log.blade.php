<html>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
<body>
 

    <a href="/Daftar_Game"> Beranda</a>
	
	<br/>
	<br/>
    

	<br/>
	<form action="/price_log" method="post">
    {{ csrf_field() }}
		id_game <input type="text" name="id_game" required="required"> <br/>
		harga   <input type="text" name="harga" required="required"> <br/>
		<input type="submit" value="Ubah harga">
	</form>
	
	<br/>
    <br/>

	<div class="container">
  		<div class="card">
   			<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>game_id</th>
						<th>waktu_diskon</th>
						<th>nama_game</th>
						<th>Harga sebelum diskon</th>
						<th>Harga setelah diskon</th>
					</tr>
					@foreach($price_log as $p)
					<tr>
						<td>{{ $p->g_id }}</td>
						<td>{{ $p->timechange }}</td>
						<td>{{ $p->nama_game }}</td>
						<td>{{ $p->oldprice }}</td>
						<td>{{ $p->newprice }}</td>
					</tr>
					@endforeach
				</table>
			</div>
  		</div>
	</div>
 
 
</body>
</html>