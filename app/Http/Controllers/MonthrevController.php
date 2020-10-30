<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonthrevController extends Controller
{
    public function tampilkan()
    {
        return view('penghasilan');
    }
    public function revenue(Request $bulan)
    {
    	// mengambil data dari table pegawai
    	$pen = DB::select('SELECT SUM(daftar_game.Harga) As Penghasilan FROM daftar_game, dilakukan, pembelian WHERE daftar_game.id_game = dilakukan.id_game and dilakukan.id_beli=pembelian.id_beli and extract(month from pembelian.Tanggal_Beli) = ?', [$bulan->bulans]);
        
    	// mengirim data pegawai ke view index
    	return view('revvv',['pen' => $pen]);
 
    }
}
