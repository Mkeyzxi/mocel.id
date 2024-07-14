<?php
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\ArtikelController;
// use App\Http\Controllers\BerandaController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\RegisterController;
// use App\Models\Artikel;

// Route::get('/', function (){
//     return redirect('/login');
// });

// Route::get('/home', function (){
//     return redirect('/beranda');
// });

// // Route::middleware('admin')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::post('/dashboard', [ArtikelController::class, 'store'])->name('store');
// // });

// // Route::middleware('auth')->group(function () {
//     Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
//     Route::get('/artikels', [ArtikelController::class, 'index']);
//     Route::get('/artikels/{artikels:title}', function (Artikel $artikels) {
//         return view('artikel', compact('artikels'));
//     });
// // });

// // Route::middleware('guest')->group(function () {
//     Route::get('/register', [RegisterController::class, 'index']);
//     Route::post('/register', [RegisterController::class, 'register'])->name('buatAkun');
//     Route::get('/login', [LoginController::class, 'index']);
//     Route::post('/login', [LoginController::class, 'login'])->name('login');
// });


use App\Models\Artikel;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Models\Bengkel;
use App\Models\User;

// Route untuk halaman beranda
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/home', function () {
    return redirect('/beranda');
});


// dashboard admin
// Route::group(['middleware' => 'admin'], function(){
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::group(['middleware' => 'auth'], function(){
    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
});
Route::post('/dashboard/{id}', [ArtikelController::class, 'store'])->name('artikel.store');
Route::post('/dashboard', [BengkelController::class, 'store'])->name('bengkel.store');
Route::get('/dashboard/delete/artikel/{id}', [ArtikelController::class, 'delete']);
Route::get('/dashboard/delete/bengkel/{id}', [BengkelController::class, 'delete']);
Route::get('/dashboard/edit/artikel/{id}', [ArtikelController::class, 'edit']);
Route::get('/dashboard/edit/bengkel/{id}', [BengkelController::class, 'edit']);
Route::post('/dashboard/update/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
Route::post('/dashboard/update/bengkel/{id}', [BengkelController::class, 'update'])->name('bengkel.update'); 
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('buatAkun');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/artikels', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikels/{artikels:title}', function (Artikel $artikels) {
    return view('artikel', compact('artikels'));
});
Route::get('/bengkels/{bengkels:workshop_name}', function (Bengkel $bengkels) {
    return view('bengkel', compact('bengkels'));
});
Route::get('/infobengkel', [BengkelController::class, 'index'])->name('bengkel.index'); 
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
