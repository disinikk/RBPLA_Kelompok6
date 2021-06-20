<?php

use App\Http\Controllers\sController;
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
