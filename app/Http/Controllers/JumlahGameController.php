<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class JumlahGameController extends Controller
{

    public function tengok()
    {
    	return view('jumlahgame');
 
    }

    public function lihat(Request $genre)
    {
    	// mengambil data dari table pegawai
    	$lihat = DB::select('select count(Genre) as jumlahs FROM daftar_game where  Genre LIKE ?',[$genre->genres]);
 
    	// mengirim data pegawai ke view index
    	return view('lihat',['Daftar' => $lihat,'genre' =>$genre]);
 
    }

}
