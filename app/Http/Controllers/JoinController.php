<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    public function join()
    {
    	$join = DB::table('pembeli')
        ->select('pembeli.nama_pembeli','pembelian.tanggal_beli','daftar_game.nama_game')
        ->join('pembelian', 'pembelian.id_pembeli', '=', 'pembeli.id_pembeli')
        ->join('dilakukan', 'dilakukan.id_beli', '=', 'pembelian.id_beli')
        ->join('daftar_game', 'daftar_game.id_game', '=', 'dilakukan.id_game')
        ->join('developer', 'developer.id_developer', '=', 'daftar_game.id_developer')        
        ->get();
    
    	// mengirim data pegawai ke view index
        return view('join',['join' => $join]);
 
    }
}
