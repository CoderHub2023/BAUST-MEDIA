<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [ProfileController::class, 'home'])->name('home');


Route::middleware('auth')->group(function () {
    // public profile routes
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/update', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/update', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Profile routes
    Route::get('/admin/welcome',[AdminController::class,'index'])->name('admin.welcome');
});

require __DIR__.'/auth.php';
