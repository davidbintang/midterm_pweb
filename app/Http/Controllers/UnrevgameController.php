<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnrevgameController extends Controller
{
    	public function flexit()
    {
    
        $unreviewedgame = DB::table('daftar_game')
            ->whereNotExists(function($unreviewedgame)
            {
                $unreviewedgame->select(DB::raw(1))
                      ->from('review')
                      ->whereRaw('daftar_game.id_game = review.id_game');
            })
            ->get();
    
    	// mengirim data pegawai ke view index
        return view('unreviewedgame',['unreviewedgame' => $unreviewedgame]);
    
 
    }
}
