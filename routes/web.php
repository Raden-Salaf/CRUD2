<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('siswa', 'App\Http\Controllers\SiswaController@index');


Route::get('pamong', 'App\Http\Controllers\PamongController@index');
//return view('daftarpamong');

//Route::get('/biodata', [PamongController::class, 'index']);

Route::get('kelas', 'App\Http\Controllers\KelasController@index');

Route::get('mapel', 'App\Http\Controllers\mapelController@index');

//  Route::get('profil', 'App\Http\Controllers\ProfilController@index');

//  Route::get('galeri', 'App\Http\Controllers\GaleriController@index');

// Route::get('kontak', 'App\Http\Controllers\KontakController@index');
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;

Route::get('home', function () {
    return view('home');
});

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/gallery', function () {
    return view('galeri');
});

Route::get('/kontak', [KontakController::class, 'index']);
