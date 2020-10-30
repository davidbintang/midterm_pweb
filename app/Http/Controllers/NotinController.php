<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotinController extends Controller
{
    public function notin()
    {   
        $cekbeli = 0 ;

        $notin = DB::table('pembeli')
            ->whereNotExists(function($notin)
            {
                $notin->select(DB::raw(2))
                      ->from('pembelian')
                      ->whereRaw('pembeli.id_pembeli= pembelian.id_pembeli');
            })
            ->get();
    
    	// mengirim data pegawai ke view index
        return view('notin',['notin' => $notin,'cekbeli'=>$cekbeli]);
 
    }


    public function cekpembelian(Request $beli)
    {
		$cekbeli = 1 ;
    	// mengambil data dari table pegawai
        $cekpembeli =DB::select('SELECT count(pembelian.id_pembeli) as total, pembeli.Nama_pembeli FROM pembeli,pembelian WHERE pembeli.Nama_pembeli LIKE ? and pembelian.id_pembeli = pembeli.id_pembeli GROUP BY pembeli.Nama_pembeli ',[$beli->namapembeli]);
        
        $notin = DB::table('pembeli')
        ->whereNotExists(function($notin)
        {
            $notin->select(DB::raw(2))
                  ->from('pembelian')
                  ->whereRaw('pembeli.id_pembeli= pembelian.id_pembeli');
        })
        ->get();
    
    	// mengirim data pegawai ke view index
        return view('notin',['notin' => $notin,'cekpembeli'=>$cekpembeli,'cekbeli'=>$cekbeli]);
 
    }



}
 