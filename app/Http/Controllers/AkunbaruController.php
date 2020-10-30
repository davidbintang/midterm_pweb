<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkunbaruController extends Controller
{
    public function akunbaru()
    {
    	// mengambil data dari table pegawai
    	$akun_baru = DB::table('akun_baru')->get();
 
    	// mengirim data pegawai ke view index
    	return view('akun_baru',['akun_baru' => $akun_baru]);
 
    }
}
