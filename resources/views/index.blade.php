<html>

<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">


<body>
	<a  class ="contoh-link" href="/review">Review Game ||</a> 

    <a class ="contoh-link" href="/developers">developer Game ||</a> 

    <a class ="contoh-link" href="/pembeli">pembeli Game ||</a>

    <a class ="contoh-link" href="/pembelian">pembelian Game ||</a> 

    <a class ="contoh-link" href="/price_log">Diskon Game ||</a> 

    <a class ="contoh-link" href="/Daftar_Game/dilakukan"> Beli</a> <br>

    <a class ="contoh-link" href="/join">Cek nama dan game yang dibeli (JOIN) ||</a> 

    <a class ="contoh-link" href="/notin">Daftar Akun yang tidak membeli game  </a> <br>

    <a class ="contoh-link" href="/review_backup">Backup dari review (TRIGGER) ||</a> 

    <a class ="contoh-link" href="/akun_baru">Cek Akun Baru (TRIGGER)</a> 

    <a class ="contoh-link" href="/jumlahgame">Cari Genre</a> 

    <a class ="contoh-link" href="/lihat2">Cari Keuntungan_Developer</a> 

	<a class ="contoh-link" href="/pembelimiskin">Pembeli game 0 rupiah</a> 
	
	<a class ="contoh-link" href="/hisacc">Org yg pernah punya akun</a> 

	<a class ="contoh-link" href="/reviewedgame">Game yg sudah direview</a> 

	<a class ="contoh-link" href="/unreviewedgame">Game yg belum direview</a> 
	
	<a class ="contoh-link" href="/penghasilan">Penghasilan di bulan kesekian dari tahun ke tahun</a> 

	<a class ="contoh-link" href="/query">Optimasi</a> 

	<a class ="contoh-link" href="/uprate">LOG TRANSAKSI</a> 

	<a class ="contoh-link" href="/totalnya">Jumlah pembeli laki2 dan perempuan</a> 
	<br/>
	<br/>
    
	
    
     
 <div class="container">
  <div class="card">
   <div class="card-body">

    <table class="table table-bordered">
		<tr>
			<th>id_game</th>
            <th>id_Dev</th>
			<th>Nama_game</th>
			<th>Genre</th>
			<th>Rating</th>
			<th>Harga</th>
            <th>TGL_RILIS</th>
		</tr>
		@foreach($daftar_game as $p)
		<tr>
			<td>{{ $p->id_game }}</td>
			<td>{{ $p->id_developer }}</td>
			<td>{{ $p->Nama_Game }}</td>
			<td>{{ $p->Genre }}</td>
            <td>{{ $p->Rating }}</td>
            <td>{{ $p->Harga }}</td>
            <td>{{ $p->Tanggal_Rilis }}</td>
		
		</tr>
		@endforeach
	</table>
 
    </div>
  </div>
 </div>
 
</body>
</html>