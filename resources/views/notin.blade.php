<html>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
<body>
 

    <a href="/Daftar_Game"> Beranda</a><br>
	
	<br/>
	<br/>
	
	<a >Cari Total Pembelian dari Pembeli</a> 
	<form action="/notin" method="post">
    {{ csrf_field() }}
		namapembeli <input type="text" name="namapembeli" required="required"> <br/>
		<input type="submit" value="cek_pembeli">
	</form>

	@if($cekbeli != 0)
	{
		
		<div class="container">
  			<div class="card">
   				<div class="card-body">

						<table class="table table-bordered">
							<tr>
								<th>Nama Pembeli</th>
								<th>Total Pembelian</th>
							</tr>

							@foreach($cekpembeli as $p)
							<tr>
								<td>{{ $p->Nama_pembeli}}</td>
								<td>{{ $p->total}}</td>
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
								<th>Nama Pembeli</th>
							</tr>
							@foreach($notin as $p)
							<tr>
								<td>{{ $p->Nama_pembeli }}</td>
							</tr>
							@endforeach
						</table>
				</div>
  		</div>
	</div>
 
</body>
</html>