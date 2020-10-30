<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class review_backupController extends Controller
{
    public function reviewbackup()
    {
    	// mengambil data dari table pegawai
    	$review_backup = DB::table('review_backup')->get();
 
    	// mengirim data pegawai ke view index
    	return view('review_backup',['review_backup' => $review_backup]);
 
    }
}
