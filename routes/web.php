<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiketController;
use App\Models\Tiket;
use App\Http\Controllers\UserProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//ROUTE UNTUK FUNGSI APLIKASI

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('admin/tikets', [HomeController::class, 'index']);
    Route::get('/admin/tikets', [TiketController::class, 'index'])->name('admin/tikets');
    Route::get('/admin/tikets/create', [TiketController::class, 'create'])->name('admin/tikets/create');
    Route::post('/admin/tikets/save', [TiketController::class, 'save'])->name('admin/tikets/save');
    Route::get('/admin/tikets/edit/{id}', [TiketController::class, 'edit'])->name('admin/tikets/edit');
    Route::put('/admin/tikets/edit/{id}', [TiketController::class, 'update'])->name('admin/tikets/update');
    Route::get('/admin/tikets/delete/{id}', [TiketController::class, 'delete'])->name('admin/tikets/delete');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [TiketController::class, 'userDashboard'])->name('dashboard');
});


Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::middleware(['auth'])->get('/user-profile', [UserProfileController::class, 'showProfile'])->name('user.profile');

Route::get('/tiket/search', [TiketController::class, 'search'])->name('tiket.search');

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);


require __DIR__ . '/auth.php';

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
