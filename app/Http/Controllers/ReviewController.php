<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function reviewgame()
    {
    	// mengambil data dari table pegawai
    	$review = DB::table('review')->get();
 
    	// mengirim data pegawai ke view index
    	return view('reviewgame',['review' => $review]);
 
    }

    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('review')->where('id_review',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/review');
    }
}
