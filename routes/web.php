<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SekolahController;


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
Route::get('/welcome',[BerandaController::class,'index']);
Route::get('/data-mahasiswa',[MahasiswaController::class,'index']);
Route::get('/create-mahasiswa',[MahasiswaController::class,'create']);
Route::post('/simpan-mahasiswa',[MahasiswaController::class,'store']);

Route::get('/edit-mahasiswa/{id}',[MahasiswaController::class,'edit']);
Route::post('/update-mahasiswa/{id}',[MahasiswaController::class,'update']);

Route::get('/edit-mahasiswa/{id_sek}',[SekolahController::class,'edit']);
Route::post('/update-mahasiswa/{id}',[SekolahController::class,'update']);

Route::get('delete/{id}',[MahasiswaController::class,'destroy'])->name('destroy');

Route::get('delete/{id_sek}',[SekolahController::class,'destroy'])->name('destroy');
Route::get('delete/{id_dakel}',[KeluargaController::class,'destroy'])->name('destroy');
Route::get('delete/{id_pengalaman}',[PengalamanController::class,'destroy'])->name('destroy');

// Route::get('/create-mahasiswa',[SekolahController::class,'create']);
// Route::post('/simpan-mahasiswa',[SekolahController::class,'store']);

?>

