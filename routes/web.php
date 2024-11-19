<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruDashboardController;
use App\Http\Controllers\KelasDashboardController;
use App\Http\Controllers\SiswaDashboardController;
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
Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('masuk', [AuthController::class, 'login'])->name('masuk');
});

Route::middleware(['auth'])->group(function () {

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return view('list.index');
    })->name('dashboard');


    Route::resource('kelas', KelasDashboardController::class)->except(['show'])->names([
        'index' => 'kelas',
        'create' => 'kelas.create',
        'store' => 'kelas.store',
        'edit' => 'kelas.edit',
        'update' => 'kelas.update',
        'destroy' => 'kelas.destroy',
    ]);

    Route::resource('guru', GuruDashboardController::class)->except(['show'])->names([
        'index' => 'guru',
        'create' => 'guru.create',
        'store' => 'guru.store',
        'edit' => 'guru.edit',
        'update' => 'guru.update',
        'destroy' => 'guru.destroy',
    ]);

    Route::resource('siswa', SiswaDashboardController::class)->except(['show'])->names([
        'index' => 'siswa',
        'create' => 'siswa.create',
        'store' => 'siswa.store',
        'edit' => 'siswa.edit',
        'update' => 'siswa.update',
        'destroy' => 'siswa.destroy',
    ]);
});
