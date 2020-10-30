<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DevelopersController extends Controller
{
    public function developergame()
    {
    	// mengambil data dari table pegawai
    	$developer = DB::table('developer')->get();
 
    	// mengirim data pegawai ke view index
        return view('developers',['developer' => $developer]);
 
    }

    
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('developer')->where('id_developer',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/Daftar_Game');
    }

} 
