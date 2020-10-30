<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PriceLogController extends Controller
{
    public function priceloggame()
    {
    	// mengambil data dari table pegawai
    	$price_log = DB::table('price_log')->get();
 
    	// mengirim data pegawai ke view index
    	return view('price_log',['price_log' => $price_log]);
 

    }

    public function search(Request $nama)
    {
    	// mengambil data dari table pegawai
    	$lihat = DB::update('UPDATE daftar_game SET harga = ? WHERE id_game = ?',[$nama->harga,$nama->id_game]);
		return $this->priceloggame();
    	// mengirim data pegawai ke view index
    	//return view('price_log',['search' => $lihat,'nama' =>$nama]);
 
    }

}
