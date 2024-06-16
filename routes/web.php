<?php

use App\Http\Controllers\DatakaryawanController;
use App\Http\Controllers\DatamcuController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\TempatmcuController;
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
    return view('auth.login');
});

Route::middleware(['auth'])->group (function () {
    Route::get('home', function () {
        return view('dashboard.home');
    })->name('home');
});

// Menu MCU

Route::get('/data', [DatamcuController::class, 'index'])->name('data');
Route::get('/create-mcu', [DatamcuController::class, 'create'])->name('create-mcu');
Route::post('/insert-mcu', [DatamcuController::class, 'insert'])->name('insert-mcu');
// Route::get('/data', [InsertController::class, 'index'])->name('data');

Route::get('/show-mcu/{id}', [DatamcuController::class, 'show'])->name('show-mcu');
Route::get('/update-mcu/{id}', [DatamcuController::class, 'update'])->name('show-mcu');
Route::get('/detail-mcu/{id}', [DatamcuController::class, 'detail'])->name('detail-mcu');

// Karyawan Lama
// Route::get('/', [DatamcuController::class, 'index'])->name('data');

Route::get('/data/input/hasil', function () {
    return view('mcu.hasil-input');
})->name('input.hasil');

// PENGGUNA
Route::get('/pengguna', function () {
    return view('pengguna');
})->name('pengguna');

// Menu Master
// Data Karyawan
Route::get('/karyawan', [DatakaryawanController::class, 'index'])->name('karyawan');
Route::get('/tambah-karyawan', [DatakaryawanController::class, 'tambahkaryawan'])->name('tambah-karyawan');
Route::post('/insert-karyawan', [DatakaryawanController::class, 'insert'])->name('insert-karyawan');

Route::get('/show-karyawan/{id}', [DatakaryawanController::class, 'show'])->name('show-karyawan');
Route::post('/update-karyawan/{id}', [DatakaryawanController::class, 'update'])->name('update-karyawan');
Route::get('/delete-karyawan/{id}', [DatakaryawanController::class, 'delete'])->name('delete-karyawan');

// Perusahaan
Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan');
Route::get('/tambahperusahaan', [PerusahaanController::class, 'tambahperusahaan'])->name('tambahperusahaan');
Route::post('/insertperusahaan', [PerusahaanController::class, 'insertperusahaan'])->name('insertperusahaan');

Route::get('/show-perusahaan/{id}', [PerusahaanController::class, 'show'])->name('show-perusahaan');
Route::post('/update-perusahaan/{id}', [PerusahaanController::class, 'update'])->name('update-perusahaan');
Route::get('/delete-perusahaan/{id}', [PerusahaanController::class, 'delete'])->name('delete-perusahaan');

// Tempat MCU
Route::get('/tempatmcu', [TempatmcuController::class, 'index'])->name('tempatmcu');
Route::get('/tambahtempat', [TempatmcuController::class, 'tambahtempat'])->name('tambahtempat');
Route::post('/insert-tempat', [TempatmcuController::class, 'inserttempat'])->name('insert-tempat');

Route::get('/show-tempat/{id}', [TempatmcuController::class, 'show'])->name('show-tempat');
Route::post('/update-tempat/{id}', [TempatmcuController::class, 'update'])->name('update-tempat');
Route::get('/delete-tempat/{id}', [TempatmcuController::class, 'delete'])->name('delete-tempat');

// Jabatan
Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan');
Route::get('/tambahjabatan', [JabatanController::class, 'tambahjabatan'])->name('tambahjabatan');
Route::post('/insertjabatan', [JabatanController::class, 'insertjabatan'])->name('insertjabatan');

Route::get('/show-jabatan/{id}', [JabatanController::class, 'show'])->name('show-jabatan');
Route::post('/update-jabatan/{id}', [JabatanController::class, 'update'])->name('update-jabatan');
Route::get('/delete-jabatan/{id}', [JabatanController::class, 'delete'])->name('delete-jabatan');

// Departemen
Route::get('/departemen', [DepartemenController::class, 'index'])->name('departemen');
Route::get('/tambahdepartemen', [DepartemenController::class, 'tambahdepartemen'])->name('tambahdepartemen');
Route::post('/insertdepartemen', [DepartemenController::class, 'insertdepartemen'])->name('insertdepartemen');

Route::get('/show-departemen/{id}', [DepartemenController::class, 'show'])->name('show-departemen');
Route::post('/update-departemen/{id}', [DepartemenController::class, 'update'])->name('update-departemen');
Route::get('/delete-departemen/{id}', [DepartemenController::class, 'delete'])->name('delete-departemen');

// Route::get('/departemen', function () {
//     return view('master.departemen');
// })->name('departemen');

// Route::get('/jabatan', function () {
//     return view('master.jabatan');
// })->name('jabatan');

// Route::get('/baru', function () {
//     return view('dashboard.baru');
// });

// // auth
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::get('/forgot', function () {
//     return view('auth.forgot');
// })->name('forgot');

// Route::get('/reset', function () {
//     return view('auth.reset');
// })->name('reset');

// Route::get('/data', function () {
//     return view('mcu.data');
// })->name('data');

// Route::get('/data/input', function () {
//     return view('mcu.input');
// })->name('input');

// Route::get('/tambahperusahaan', function () {
//     return view('master.tambahperusahaan');
// })->name('tambahperusahaan');

// Route::get('/tambahklinik', function () {
//     return view('master.tambahklinik');
// })->name('tambahklinik');
