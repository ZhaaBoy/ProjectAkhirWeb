<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LoginController, MahasiswaController, smartphoneController, MobilController, produkController, KomController, KantinController, pesawatController, GuruController,PegawaiController};

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
// login
Route::get('/', [loginController::class, 'login'])->name('login');
Route::post('/log', [loginController::class, 'log'])->name('log');
// register
Route::get('/register', [LoginController::class, 'regist'])->name('register');
Route::post('/regist', [LoginController::class, 'store'])->name('register.store');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::get('/smartphone', [smartphoneController::class, 'index'])->name('index');
    Route::get('/mobil', [MobilController::class, 'index'])->name('mobil');
    Route::get('/komputer', [KomController::class, 'index'])->name('komputer');
    Route::get('/kantin', [KantinController::class, 'index'])->name('kantin');
    Route::get('/pesawat', [pesawatController::class, 'index'])->name('pesawat');
    Route::get('/produk', [produkController::class, 'index'])->name('produk');
    Route::get('/guru', [GuruController::class, 'index'])->name('guru');
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');

     //logout
     Route::post('/logout', [loginController::class, 'logout'])->name('logout');

    //  mahasiswa
    Route::get('/tambahanggota', [MahasiswaController::class, 'create'])->name('mhs.create');
    Route::post('/mhsw', [MahasiswaController::class, 'store'])->name('mhs.store');

    Route::resource('/mhs', MahasiswaController::class);
    Route::resource('/hp', smartphoneController::class);
    Route::resource('/mbl', MobilController::class);
    Route::resource('/kom', KomController::class);
    Route::resource('/ktn', KantinController::class);
    Route::resource('/pswt', pesawatController::class);
    Route::resource('/pr', produkController::class);
    Route::resource('/gr', GuruController::class);
    Route::resource('/pg', PegawaiController::class);
});
