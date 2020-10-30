<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function showus()
    {
    	return view('totalnya');
 
    }

    public function hitung(Request $jk)
    {
    	// mengambil data dari table pegawai
    	$hitung = DB::select('select count(nama_pembeli) as jumlah FROM pembeli where  Jenis_kelamin LIKE ?',[$jk->Jenis_kelamin]);
 
    	// mengirim data pegawai ke view index
    	return view('hitung',['Daftar' => $hitung,'jk' =>$jk]);
 
    }
}
