<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GratisController extends Controller
{
    public function beli()
    {
    	// mengambil data dari table pegawai
    	$miskin = DB::select('SELECT pembeli.Nama_pembeli , daftar_game.Nama_Game 
        FROM dilakukan
        INNER JOIN daftar_game ON daftar_game.id_game = dilakukan.id_game
        INNER JOIN pembeli ON pembeli.id_pembeli = dilakukan.id_pembeli
        WHERE daftar_game.harga = 0 
        ORDER BY pembeli.id_pembeli'
        );
 
    	// mengirim data pegawai ke view index
    	return view('pembelimiskin',['miskin' => $miskin]);
 
    }
}
