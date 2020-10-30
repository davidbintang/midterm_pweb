<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function pembeliangame()
    {
		$cekumur = 0 ;
    	// mengambil data dari table pegawai
    	$pembelian = DB::table('pembelian')->get();
 
    	// mengirim data pegawai ke view index
    	return view('pembelian',['pembelian' => $pembelian,'cekumur' => $cekumur]);
 
	}

	public function add()
	{
	// memanggil view tambah
	return view('form');

	}

	public function masukkin(Request $request)
	{

	 
// insert data ke table pegawai
DB::table('pembelian')->insert([
	'id_beli' => $request->id_pembeli,
	'id_pembeli' => $request->id_pembeli,
	'Tanggal_Beli' => $request->Tanggal_Beli,
]); 
// alihkan halaman ke halaman pegawai
return redirect('/pembelian');

}
	
	public function umurgame(Request $game)
    {
		$cekumur = 1 ;
    	// mengambil data dari table pegawai
		$umur =DB::select('SELECT Nama_Game , FLOOR(DATEDIFF(NOW(), DATE(Tanggal_Rilis))/365) as gameage FROM daftar_game WHERE daftar_game.id_game = ?;',[$game->id_game]);
		$pembelian = DB::table('pembelian')->get();
		
    	// mengirim data pegawai ke view index
    	return view('pembelian',['pembelian' => $pembelian,'umur' => $umur,'cekumur' => $cekumur,'game'=>$game]);
 
    }
}
