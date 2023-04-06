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
    Route::get('/profile/update-details', [ProfileController::class, 'update_details'])->name('profile.update-details');
    Route::post('/profile/update-details/post', [ProfileController::class, 'post_update_details'])->name('profile.post-update-details');
    
    // Admin Profile routes
    Route::get('/admin/welcome',[AdminController::class,'index'])->name('admin.welcome');
    Route::get('/admin/user-request',[AdminController::class,'user_request'])->name('admin.user_request');
    Route::post('/admin/user-request',[AdminController::class,'post_user_request'])->name('admin.post_user_request');
});

require __DIR__.'/auth.php';
