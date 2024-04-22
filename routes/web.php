<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/deposit', [ProfileController::class, 'deposit']);
    Route::get('/withdraw', [ProfileController::class, 'withdraw']);
    Route::get('/deposit', [ProfileController::class, 'deposit']);

});

//admin controller
Route::resource('admin', AdminController::class);
Route::get('admin/detail/{id}', [AdminController::class, 'detail']);
Route::put('update-data/{id}', [AdminController::class, 'updateuser']);
Route::post('/create-data', [AdminController::class, 'createuser']);

//user profile controller
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
