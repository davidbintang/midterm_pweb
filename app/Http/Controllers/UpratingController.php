<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpratingController extends Controller
{
    public function ngeup()
    {
    	// mengambil data dari table pegawai
        $uprate = DB::table('logbeli')->get();
         
    	// mengirim data pegawai ke view index
    	return view('uprate',['uprate' => $uprate]);
 
    }
}
