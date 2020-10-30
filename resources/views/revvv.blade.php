<!DOCTYPE html>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
<html>
<body>
 
	<a href="/Daftar_Game"> Beranda</a>
	
	<br/>
	<br/>
 
	
	<div class="container">
  		<div class="card">
   			<div class="card-body">

    			<table class="table table-bordered">
					<tr>
						<th>Penghasilan</th>
					</tr>
					@foreach($pen as $p)
					<tr>
						<td>{{ $p->Penghasilan }}</td>
					</tr>
					@endforeach
				</table>
	

			</div>
  		</div>
	</div>

 
</body>
</html>