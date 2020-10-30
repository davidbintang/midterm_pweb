<html>

<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

<body>
 

    <a href="/Daftar_Game"> Beranda</a>
	<a href="/pembelian/form">Tambah Akun</a>
	
	<br/>
	<br/>
	
	<a >Cari Lama_Game(Umur)</a> 
	<form action="/pembelian" method="post">
    {{ csrf_field() }}
		id_game <input type="text" name="id_game" required="required"> <br/>
		<input type="submit" value="cek_umur">
	</form>

	@if($cekumur != 0)
	{
		
		<div class="container">
  			<div class="card">
   				<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>Nama Game</th>
						<th>umur_game</th>
					</tr>

					@foreach($umur as $p)
					<tr>
						<td>{{ $p->Nama_Game}}</td>
						<td>{{ $p->gameage}}</td>
					</tr>
					@endforeach
				</table>
		
			</div>
  		</div>
	</div>

	}	
	@endif

	<br/>
	<br/>    
	<div class="container">
  			<div class="card">
   				<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>id_beli</th>
						<th>id_Pembeli</th>
						<th>Tanggal_Beli</th>
					</tr>
					@foreach($pembelian as $p)
					<tr>
						<td>{{ $p->id_beli }}</td>
						<td>{{ $p->id_pembeli }}</td>
						<td>{{ $p->Tanggal_Beli }}</td>
					</tr>
					@endforeach
				</table>
			</div>
  		</div>
	</div>
 
</body>
</html>