<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SnackController;
use App\Http\Controllers\PentolController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\SlideController;

Route::get('/welcome', function () {
    return view('welcome');
});

//Route FrontEnd
Route::get('/', [HomeController::class,'home'])->name('index');
Route::get('/home', [HomeController::class,'index'])->name('home');


Route::get('/pesanan', function () {
    return view('frontend.pesanan');
})->name('pesanan');

Route::get('/lacak', function () {
    return view('frontend.lacak');
})->name('lacak');


//RouteBackEnd

Route::get('/index', function () {
    return view('backend.index');
})->name('index');

// Route::get('pentol', [PentolController::class,'index'])->name('pentol.index');
// Route::get('pentol/create', [PentolController::class,'create'])->name('pentol.create');


Route::controller(PentolController::class)->group(function(){
    Route::get('/pentol','home')->name('pentol');
    Route::get('/pentol/create','create')->name('pentol.create');
    Route::post('/pentol','store')->name('pentol.store');
    Route::get('/pentol/{id}/edit','edit')->name('pentol.edit');
    Route::put('/pentol/{id}','update')->name('pentol.update');
    Route::delete('/pentol/{id}','destroy')->name('pentol.destroy');    
});


Route::controller(MinumanController::class)->group(function(){
    Route::get('/minuman','home')->name('minuman');
    Route::get('/minuman/create','create')->name('minuman.create');
    Route::post('/minuman','store')->name('minuman.store');
    Route::get('/minuman/{id}/edit','edit')->name('minuman.edit');
    Route::put('/minuman/{id}','update')->name('minuman.update');
    Route::delete('/minuman/{id}','destroy')->name('minuman.destroy');    
});


Route::controller(SnackController::class)->group(function(){
    Route::get('/snack','home')->name('snack');
    Route::get('/snack/create','create')->name('snack.create');
    Route::post('/snack','store')->name('snack.store');
    Route::get('/snack/{id}/edit','edit')->name('snack.edit');
    Route::put('/snack/{id}','update')->name('snack.update');
    Route::delete('/snack/{id}','destroy')->name('snack.destroy');    
});


// Route::get('/snack', [SnackController::class,'home'])->name('snack');
// Route::get('/pentol-add', [PentolController::class,'pentol_add'])->name('pentol-add');
// Route::post('/pentol-store', [PentolController::class,'pentol_store'])->name('pentol-store');

// Route::get('/pentol-edit/{id}', [PentolController::class,'pentol_edit'])->name('pentol-edit');
// Route::put('/pentol-update/{id}', [PentolController::class,'pentol_update'])->name('pentol-update');


// Route::delete('/pentol-delete/{id}', [PentolController::class,'pentol_delete'])->name('pentol-delete');

// Route::get('/minuman', function () {
//     return view('backend.produk.minuman');
// })->name('minuman');

// Route::get('/snack', function () {
//     return view('backend.produk.snack');
// })->name('snack');

Route::get('/stok-pentol', function () {
    return view('backend.pengaturan-stock.stok-pentol');
})->name('stok-pentol');

Route::get('/stok-minuman', function () {
    return view('backend.pengaturan-stock.stok-minuman');
})->name('stok-minuman');

Route::get('/stok-snack', function () {
    return view('backend.pengaturan-stock.stok-snack');
})->name('stok-snack');

Route::get('/diskon', function () {
    return view('backend.transaksi.diskon');
})->name('diskon');

Route::get('/pesanan-masuk', function () {
    return view('backend.transaksi.pesanan-masuk');
})->name('pesanan-masuk');

Route::get('/pesanan-selesai', function () {
    return view('backend.transaksi.pesanan-selesai');
})->name('pesanan-selesai');

Route::get('/laporan-stok', function () {
    return view('backend.laporan.laporan-stok');
})->name('laporan-stok');

Route::get('/laporan-harian', function () {
    return view('backend.laporan.laporan-harian');
})->name('laporan-harian');

Route::get('/laporan-bulanan', function () {
    return view('backend.laporan.laporan-bulanan');
})->name('laporan-bulanan');

Route::get('/user', function () {
    return view('backend.pengaturan.user.add-user');
})->name('user');

Route::controller(SlideController::class)->group(function(){
    Route::get('/slide','home')->name('slide');
    Route::get('/slide/create','create')->name('slide.create');
    Route::post('/slide','store')->name('slide.store');
    Route::get('/slide/{id}/edit','edit')->name('slide.edit');
    Route::put('/slide/{id}','update')->name('slide.update');
    Route::delete('/slide/{id}','destroy')->name('slide.destroy');    
});