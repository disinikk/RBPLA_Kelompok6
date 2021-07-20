<?php

use App\Http\Controllers\MenggambarController;
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
    return view('guru.index');
}) -> name('index');

Route::get('matapelajaran',function(){
    return view('guru.mataPelajaran');
}) -> name('matapelajaran');

Route::get('tugas',function(){
    return view('guru.tugas');
}) -> name('tugas');


Route::get('tes',function(){
    return view('guru.tes');
}) -> name('tes');


Route::get('/materi', [sController::class, 'index']);
Route::get('/materi/tambah', [sController::class, 'upMateri']);
Route::post('/materi/upload', [sController::class, 'upload_materi']);
Route::get('/materi/read/{id}',[sController::class, 'read']);
Route::get('/materi/hapus/{id}',[sController::class, 'hapusMateri']);

//Route Menghitung
Route::get('/menghitung', 'App\Http\Controllers\MenghitungController@menghitung');
Route::get('/menghitung/tambahmenghitung', 'App\Http\Controllers\MenghitungController@upMenghitung');
Route::post('/menghitung/upload', 'App\Http\Controllers\MenghitungController@upload_materi');
Route::get('/menghitung/read/{id}', 'App\Http\Controllers\MenghitungController@read');
Route::get('/menghitung/hapus/{id}', 'App\Http\Controllers\MenghitungController@hapus');

//Route Menggambar
Route::get('/menggambar', [MenggambarController::class, 'menggambar']);
Route::get('/menggambar/tambahmenggambar', [MenggambarController::class, 'upMenggambar']);
Route::post('/menggambar/upload', [MenggambarController::class, 'upload_materi']);
Route::get('/menggambar/read/{id}', [MenggambarController::class, 'read']);
Route::get('/menggambar/hapus/{id}', [MenggambarController::class, 'hapus']);

//Route Sopan Santun
Route::get('/sopansantun', [SopansantunController::class, 'sopansantun']);
Route::get('/sopansantun/tambahsopansantun', [SopansantunController::class, 'tambahsopansantun']);
Route::post('/sopansantun/upload', [SopansantunController::class, 'upload_sopansantun']);
Route::get('/sopansantun/read/{id}', [SopansantunController::class, 'read']);
Route::get('/sopansantun/hapus/{id}', [SopansantunController::class, 'hapus']);


//Route Tugas
Route::get('/tugas', [sController::class, 'tugas']);
Route::get('/tugas/tambah', [sController::class, 'upTugas']);
Route::post('/tugas/upload', [sController::class, 'upload_tugas']);
Route::get('/tugas/read/{id}',[sController::class, 'readTugas']);
Route::get('/tugas/hapus/{id}',[sController::class, 'hapusTugas']);
