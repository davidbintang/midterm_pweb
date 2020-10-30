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
						<th>jumlah</th>
					</tr>
					@foreach($Daftar as $p)
					<tr>
						<td>{{ $p->jumlah}}</td>
					</tr>
					@endforeach
				</table>
 
			</div>
  		</div>
	</div>

</body>
</html>