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
Route::get('/login.html','LoginController@index');
Route::get('/test.html','LoginController@test');
Route::get('/logout.html','LoginController@logout');
Route::post('/proccess','LoginController@login')->name('proccess');




Route::group(['middleware' => 'sesLogin'],function(){

Route::get('/', function () {
    return view('welcome');
});

// data petani
Route::get('/petani.html','petaniController@index');
Route::post('/save_petani','petaniController@save_petani')->name('save_petani.post');
Route::post('/edit_petani','petaniController@edit_petani')->name('edit_petani.post');
Route::post('/delete_petani','petaniController@delete_petani')->name('delete_petani.post');
Route::get('/test','petaniController@test');
// --------------------------

// data penyuluh
Route::get('/penyuluh.html','Data_penyuluhController@index');
Route::post('/save_penyuluh','Data_penyuluhController@store')->name('save_penyuluh.post');
Route::post('/edit_penyuluh','Data_penyuluhController@update')->name('edit_penyuluh.post');
Route::post('/delete_penyuluh','Data_penyuluhController@destroy')->name('delete_penyuluh.post');
Route::get('/test','Data_penyuluhController@test');
// --------------------------

// data wilayah
$key = "Wilayah";
Route::get('/'.$key.'.html',$key.'Controller@index');
Route::post('/save_'.$key ,$key.'Controller@store')->name('save_'.$key.'.post');
Route::post('/edit_'.$key ,$key.'Controller@update')->name('edit_'.$key.'.post');
Route::post('/delete_'.$key ,$key.'Controller@destroy')->name('delete_'.$key.'.post');
Route::get('/test_'.$key,$key.'ControllerController@test');
// --------------------------


// data wilayah
$key = "AnggotaKelompokTani";
Route::get('/'.$key.'.html',$key.'Controller@index');
Route::post('/save_'.$key ,$key.'Controller@store')->name('save_'.$key.'.post');
Route::post('/edit_'.$key ,$key.'Controller@update')->name('edit_'.$key.'.post');
Route::post('/delete_'.$key ,$key.'Controller@destroy')->name('delete_'.$key.'.post');
Route::get('/test_'.$key,$key.'ControllerController@test');
// --------------------------


// data wilayah
$key = "KunjunganKelTani";
Route::get('/'.$key.'.html',$key.'Controller@index');
Route::post('/save_'.$key ,$key.'Controller@store')->name('save_'.$key.'.post');
Route::post('/edit_'.$key ,$key.'Controller@update')->name('edit_'.$key.'.post');
Route::post('/delete_'.$key ,$key.'Controller@destroy')->name('delete_'.$key.'.post');
Route::get('/test_'.$key,$key.'ControllerController@test');
// --------------------------

// data wilayah
$key = "KunjunganPetani";
Route::get('/'.$key.'.html',$key.'Controller@index');
Route::post('/save_'.$key ,$key.'Controller@store')->name('save_'.$key.'.post');
Route::post('/edit_'.$key ,$key.'Controller@update')->name('edit_'.$key.'.post');
Route::post('/delete_'.$key ,$key.'Controller@destroy')->name('delete_'.$key.'.post');
Route::get('/test_'.$key,$key.'ControllerController@test');
// --------------------------






// akun penyuluh
Route::get('/akun_penyuluh.html','AkunPenyuluhController@index');

Route::post('/save_akun_penyuluh','AkunPenyuluhController@store')->name('save_akun_penyuluh.post');

Route::post('/edit_akun_penyuluh','AkunPenyuluhController@update')->name('edit_akun_penyuluh.post');

Route::post('/delete_akun_penyuluh','AkunPenyuluhController@destroy')->name('delete_penyuluh.post');

Route::get('/test','AkunPenyuluhController@test');
// --------------------------




// data kelompok tani
Route::get('/kelompoktani.html','KelompokTaniController');
Route::post('/save_kelompoktani','KelompokTaniController@store')->name('save_kelompoktani.post');
Route::post('/edit_kelompoktani','KelompokTaniController@update')->name('edit_kelompoktani.post');
Route::post('/delete_kelompoktani','KelompokTaniController@destroy')->name('delete_kelompoktani.post');
Route::get('/test','KelompokTaniController@test');
// --------------------------

});




