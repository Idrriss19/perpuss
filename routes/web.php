<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view(Auth::check() ? 'perpus.main' : 'perpus.login'); 
})->middleware('auth');


Route::get('/info', function() {
    return view('info', ['progdi'=> 'TI']);
});
Route::get('/info/{kd}', [infoController::class, 'infoMhs']);

Route::get('/buku', [BukuController::class, 'index'])->middleware('auth');
Route::get('/buku/add', [BukuController::class, 'add_new']);
Route::post('/buku/save', [BukuController::class, 'save']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::get('/buku/delete/{id}', [BukuController::class, 'delete']);

Route::get('/anggota', [AnggotaController::class, 'index'])->middleware('auth');
Route::get('/anggota/add', [AnggotaController::class, 'add_new']);
Route::post('/anggota/save', [AnggotaController::class, 'save']);
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit']);
Route::get('/anggota/delete/{id}', [AnggotaController::class, 'delete']);

Route::get('/pinjam', [PinjamController::class, 'index'])->middleware('auth');
Route::post('/pinjam/save', [PinjamController::class, 'save']);

Route::get('/login', [PerpusController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/perpus', [PerpusController::class, 'index'])->middleware('auth');
