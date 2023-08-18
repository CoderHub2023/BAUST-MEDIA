<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::get('/', [ProfileController::class, 'home'])->name('home');
    // profile routes
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/update', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/update', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/update-details', [ProfileController::class, 'update_details'])->name('profile.update-details');
    Route::post('/profile/update-details/post', [ProfileController::class, 'post_update_details'])->name('profile.post-update-details');

    // public profile routes
    Route::get('/test',[PublicProfileController::class,'index']);
    // About routes
    Route::get('/profile/add-about/{id}', [ProfileController::class, 'add_about'])->name('profile.add-about');
    Route::post('/profile/submit-add-about', [ProfileController::class, 'submit_add_about'])->name('profile.submit-add-about');
    Route::get('/profile/update-about/{id}', [ProfileController::class, 'update_about'])->name('profile.update-about');
    Route::post('/profile/submit-update-about/{id}', [ProfileController::class, 'submit_update_about'])->name('profile.submit-update-about');
    
    // Start Works routes
    Route::get('/profile/add-works/', [ProfileController::class, 'add_works'])->name('profile.add-works');
    Route::post('/profile/submit-add-works/', [ProfileController::class, 'submit_add_works'])->name('profile.submit-add-works');
    Route::get('/profile/update-works/{id}', [ProfileController::class, 'update_works'])->name('profile.update_works');
    Route::post('/profile/submit-update-works/{id}', [ProfileController::class, 'submit_update_works'])->name('profile.submit_update_works');
    // End Work routes

    // Education routes
    Route::get('/profile/add-education/', [ProfileController::class, 'add_education'])->name('profile.add-education');
    Route::post('/profile/submit-add-education/', [ProfileController::class, 'submit_add_education'])->name('profile.submit-add-education');
    Route::get('/profile/update-education/{id}', [ProfileController::class, 'update_education'])->name('profile.update_education');
    Route::post('/profile/submit-update-education/{id}', [ProfileController::class, 'submit_update_education'])->name('profile.submit_update_education');
    // End Education routes

    Route::post('/profile/work-update-details', [ProfileController::class, 'work_update_details'])->name('profile.work_update_details');
    Route::post('/profile/education-update-details', [ProfileController::class, 'education_update_details'])->name('profile.education_update_details');
    Route::post('/profile/image-upload', [ProfileController::class, 'image_upload'])->name('profile.image-upload');
    Route::get('/profile/add-skills', [ProfileController::class, 'add_skills'])->name('profile.add-skills');
    
    // My Network
    Route::get('/my-network',[NetworkController::class,'my_network'])->name('My-Network');
    Route::get('/add-network/{id}',[NetworkController::class,'add_network'])->name('Add-Network');
    Route::get('/my-friends',[NetworkController::class,'my_friends'])->name('My-Friends');
    Route::get('network-range',[NetworkController::class,'network_range'])->name('network-range');
    Route::get('/remove-network/{id}',[NetworkController::class,'remove_network'])->name('remove-network'); 
    
    // Admin Profile routes
    Route::get('/admin/welcome',[AdminController::class,'index'])->name('admin.welcome');
    
    // User request acceptance route
    // For getting id and chaning it's usertype 
    Route::get('/admin/getuserid/{id}',[AdminController::class,'accept_request']);
    // Rejecting purpose routes
    // For getting id and chaning it's usertype 
    Route::get('/admin/getrejuserid/{id}',[AdminController::class,'reject_request']);

    Route::get('/admin/accept-user',[AdminController::class,'accept_user'])->name('accepted_user');
    
    Route::get('/admin/reject-user',[AdminController::class,'reject_user'])->name('rejected_user');
    
    Route::get('/admin/user-request',[AdminController::class,'user_request'])->name('admin.user_request');
    Route::post('/admin/user-request',[AdminController::class,'post_user_request'])->name('admin.post_user_request');
});

require __DIR__.'/auth.php';
