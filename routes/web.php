<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

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

Route::get('/', [Home::class,'auth']);

Route::get('/kegiatan', [Home::class,'index'])->name('kegiatan');

Route::get('/narsum', [Home::class,'index_narsum'])->name('indexnarsum');
Route::get('/addnarsum', [Home::class,'addnarsum'])->name('addnarsum');
Route::post('/savenarsum', [Home::class,'savenarsum'])->name('savenarsum');

Route::get('/editnarsum/{id_narsum}', [Home::class,'editnarsum'])->name('editnarsum');
Route::put('/updatenarsum/{id_narsum}', [Home::class,'updatenarsum'])->name('updatenarsum');
Route::delete('/deletenarsum/{id_narsum}', [Home::class,'deletenarsum'])->name('deletenarsum');