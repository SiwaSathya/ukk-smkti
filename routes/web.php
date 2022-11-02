<?php

use Illuminate\Support\Facades\Route;

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

Route::get('template', function () {
    return view('template');
});

Route::get('test', function () {
    return view('test');
});

Route::get('index', function () {
    return view('index');
});

route::get('dashboard', 'DashboardController@index');



//ROUTE HOME
route::get('home', 'HomeController@index');

// ROUTE PENGUNJUNG CONTROLLER
Route::get('pengajuan', 'PengajuanController@index');
route::get('pengajuancari','PengajuanController@cari');

route::get('pengajuantambah', 'PengajuanController@tambah');
route::post('pengajuan/store','PengajuanController@store');

route::get('pengajuanedit{id}', 'PengajuanController@edit');
route::post('pengajuan/update', 'PengajuanController@update');

route::get('pengajuanhapus/{id}','PengajuanController@hapus');

//ROUTE LAPORAN CONTROLLER
Route::get('laporan', 'LaporanController@index');
route::get('laporanhapus/{id}','LaporanController@hapus');


Route::get('laporantambah{id}', 'LaporanController@tambah');
Route::post('laporan/store{id}', 'LaporanController@store');


route::get('/showlaporan{id}', 'LaporanController@show');

Route::get('test', 'TestController@index');

//PRFOFIL CONTROLLER
route::get('profile', 'ProfileController@index');

route::get('profileedit{id}', 'ProfileController@edit');
route::post('profile/update', 'ProfileController@update');

Route::get('profiletambah', 'ProfileController@tambah');
Route::post('profile/store', 'ProfileController@store');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
