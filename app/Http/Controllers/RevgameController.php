<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevgameController extends Controller
{
    	public function showit()
    {
    	$reviewedgame = DB::table('daftar_game')
        ->select('nama_game')
        ->join('review', 'daftar_game.id_game', '=', 'review.id_game')        
        ->get();
    
    	// mengirim data pegawai ke view index
        return view('reviewedgame',['reviewedgame' => $reviewedgame]);
 
    }
}
