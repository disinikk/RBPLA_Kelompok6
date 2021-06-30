<?php

use App\Http\Controllers\sController;
use App\Http\Controllers\SopansantunController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('index',function(){
    return view('rbpl.index');
}) -> name('index');

Route::get('matapelajaran',function(){
    return view('rbpl.mataPelajaran');
}) -> name('matapelajaran');

Route::get('tes',function(){
    return view('rbpl.tes');
}) -> name('tes');


Route::get('/materi', [sController::class, 'index']);
Route::get('/materi/tambah', [sController::class, 'upMateri']);
Route::post('/materi/upload', [sController::class, 'upload_materi']);
Route::get('/materi/read/{id}',[sController::class, 'read']);

//Route Menghitung
Route::get('/menghitung', 'App\Http\Controllers\MenghitungController@menghitung');
Route::get('/menghitung/tambahmenghitung', 'App\Http\Controllers\MenghitungController@upMenghitung');
Route::post('/menghitung/upload', 'App\Http\Controllers\MenghitungController@upload_materi');
Route::get('/menghitung/read/{id}', 'App\Http\Controllers\MenghitungController@read');

//Route Menggambar
Route::get('/menggambar', 'App\Http\Controllers\MenggambarController@menggambar');
Route::get('/menggambar/tambahmenggambar', 'App\Http\Controllers\MenggambarController@upMenggambar');
Route::post('/menggambar/upload', 'App\Http\Controllers\MenggambarController@upload_materi');
Route::get('/menghitung/read/{id}', 'App\Http\Controllers\MenggambarController@read');

//Route Sopan Santun
Route::get('/sopansantun', [SopansantunController::class, 'sopansantun']);
Route::get('/sopansantun/tambahsopansantun', [SopansantunController::class, 'tambahsopansantun']);
Route::post('/sopansantun/upload', [SopansantunController::class, 'upload_sopansantun']);
Route::get('/sopansantun/read/{id}', [SopansantunController::class, 'read']);
