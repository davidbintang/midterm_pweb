<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DaftarGameController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
        $daftargame = DB::table('daftar_game')->get();
         
    	// mengirim data pegawai ke view index
    	return view('index',['daftar_game' => $daftargame]);
 
    }

    public function dilakukan()
    {
	// memanggil view tambah
        return view('dilakukan');
    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('dilakukan')->insert([
		'id_developer' => $request->id_Dev,
		'id_game' => $request->id_game,
		'id_pembeli' => $request->id_pembeli,
		'id_beli' => $request->id_beli
    ]);
    
	// alihkan halaman ke halaman pegawai
	return redirect('/Daftar_Game');
 
    }

    
}
