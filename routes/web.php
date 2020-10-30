<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/review_backup', 'review_backupController@reviewbackup');

Route::get('/review', 'ReviewController@reviewgame');

Route::get('/review/hapus/{id}','ReviewController@hapus');

Route::get('/Daftar_Game', 'DaftarGameController@index');

Route::get('/Daftar_Game/dilakukan', 'DaftarGameController@dilakukan');

Route::post('/Daftar_Game/store','DaftarGameController@store');

Route::get('/developers', 'DevelopersController@developergame');

Route::get('/developers/hapus/{id}', 'DevelopersController@hapus');

Route::get('/pembeli', 'PembeliController@pembeligame');

Route::get('/pembelian', 'PembelianController@pembeliangame');

Route::post('/pembelian', 'PembelianController@umurgame');

Route::get('/price_log', 'PriceLogController@priceloggame');

Route::post('/price_log','PriceLogController@search');

Route::get('/akun_baru', 'akunbaruController@akunbaru');

Route::get('/pembeli/tambah','PembeliController@tambah');

Route::post('/pembeli/store','PembeliController@store');

Route::get('/join','JoinController@join');

Route::get('/notin','NotinController@notin');

Route::post('/notin','NotinController@cekpembelian');

Route::get('/jumlahgame','JumlahGameController@tengok');

Route::post('/jumlahgame/lihat','JumlahGameController@lihat');

Route::get('/lihat2','TotalGameController@pantau');

Route::post('/lihat2/totharga','TotalGameController@lihat2');

Route::get('/pembelimiskin','GratisController@beli');

Route::get('/hisacc','DelaccController@delacc');

Route::get('/pembeli/hapus/{id}', 'PembeliController@hapus');

Route::get('/reviewedgame','RevgameController@showit');

Route::get('/unreviewedgame','UnrevgameController@flexit');

Route::get('/penghasilan','MonthrevController@tampilkan');

Route::post('/revvv','MonthrevController@revenue');

Route::get('/query','QueryController@tampil');

Route::get('/uprate','UpratingController@ngeup');

Route::get('/pembelian/form','PembelianController@add');

Route::post('/pembelian/masukkin','PembelianController@masukkin');

Route::get('/totalnya','CounterController@showus');

Route::post('/totalnya/hitung','CounterController@hitung');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
