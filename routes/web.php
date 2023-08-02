<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [DashboardController::class, 'landingpage'])->name('landingpage');

Route::get('/dashboard', function () {
    return view('utils.layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/data', [DashboardController::class, 'data'])->name('data');
    Route::get('/tambah_data', [DashboardController::class, 'tambah_data'])->name('tambah_data');
    Route::get('/tambah_data_carousel', [DashboardController::class, 'tambah_data_carousel'])->name('tambah_data_carousel');

    Route::get('/tambah_data_jualan', [DashboardController::class, 'tambah_data_jualan'])->name('tambah_data_jualan');
    Route::get('/lihat_detail/{id}', [ProdukController::class, 'lihat_detail'])->name('lihat_detail');
    Route::post('/store_data_jualan', [DashboardController::class, 'store_data_jualan'])->name('store_data_jualan');

    Route::post('/store_data_carousel', [DashboardController::class, 'store_data_carousel'])->name('store_data_carousel');
    Route::post('/store_data', [DashboardController::class, 'store'])->name('insert_data');
    Route::delete('/delete_data/{id}', [DashboardController::class, 'delete'])->name('delete_data');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
