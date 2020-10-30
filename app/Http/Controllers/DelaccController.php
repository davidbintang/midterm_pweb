<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DelaccController extends Controller
{
    
    public function delacc()
    {
    	// mengambil data dari table pegawai
        $hisacc = DB::table('history_acc')->get();
         
    	// mengirim data pegawai ke view index
    	return view('hisacc',['hisacc' => $hisacc]);
 
    }

    
}
