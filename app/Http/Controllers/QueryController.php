<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class QueryController extends Controller
{
    public function tampil()
    {
        $item = 'G24%';
    	// mengambil data dari table pegawai
    	$query1 = DB::SELECT('SELECT pembeli.Nama_pembeli,daftar_game.Nama_Game FROM dilakukan 
                                INNER JOIN daftar_game on daftar_game.id_game = dilakukan.id_game
                                INNER JOIN pembeli on pembeli.id_pembeli = dilakukan.id_pembeli 
                                WHERE daftar_game.harga = 0
                                ORDER BY pembeli.id_pembeli DESC' );
        

        $query2 = DB::SELECT('SELECT Nama_Game From daftar_game Where EXISTS (SELECT id_game From dilakukan Where id_game LIKE ? ) and daftar_game.id_game LIKE ?',[$item,$item]);
        
        // mengirim data pegawai ke view index
    	return view('query',['query1' => $query1,'query2' => $query2]);
 

    }
}
