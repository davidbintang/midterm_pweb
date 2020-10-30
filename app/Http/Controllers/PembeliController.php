<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembeliController extends Controller
{
    public function pembeligame()
    {
    	// mengambil data dari table pegawai
    	$pembeli = DB::table('pembeli')->get();
 
    	// mengirim data pegawai ke view index
        return view('pembeli',['pembeli' => $pembeli]);
 
    }

    public function tambah()
    {
	// memanggil view tambah
	return view('tambah');
 
    }

    public function store(Request $request)
    {

     
	// insert data ke table pegawai
	DB::table('pembeli')->insert([
		'id_pembeli' => $request->id_pembeli,
		'Nama_pembeli' => $request->Nama_pembeli,
	]); 
	// alihkan halaman ke halaman pegawai
	return redirect('/pembeli');
 
	}
	
	
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pembeli')->where('id_pembeli',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/Daftar_Game');
	}
}
