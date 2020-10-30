<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TotalGameController extends Controller
{
    public function pantau()
    {
    	return view('lihat2');
 
    }

    public function lihat2(Request $nama)
    {
    	// mengambil data dari table pegawai
    	$lihat = DB::select('SELECT SUM(daftar_game.Harga) As Total FROM daftar_game, developer WHERE developer.id_developer = daftar_game.id_developer and developer.Nama_Developer LIKE ?',[$nama->namas]);
        
    	// mengirim data pegawai ke view index
    	return view('totharga',['Tot' => $lihat,'nama' =>$nama]);
 
    }
}
