<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth'])->prefix('profile')->group(function () {

//     // Get Profile
//     Route::get('/{userId}', [ProfileController::class, 'show'])->name('profile.show');

//     // Create Profile
//     Route::post('/', [ProfileController::class, 'store'])->name('profile.store');

//     // Update Profile
//     Route::put('/{userId}', [ProfileController::class, 'update'])->name('profile.update');

//     // Delete Profile
//     Route::delete('/{userId}', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     // Upload Profile Picture
//     Route::post('/{userId}/picture', [ProfileController::class, 'uploadPicture'])->name('profile.uploadPicture');

//     // Delete Profile Picture
//     Route::delete('/{userId}/picture', [ProfileController::class, 'deletePicture'])->name('profile.deletePicture');

//     // Get Privacy Settings
//     Route::get('/{userId}/privacy', [ProfileController::class, 'getPrivacySettings'])->name('profile.getPrivacySettings');

//     // Update Privacy Settings
//     Route::put('/{userId}/privacy', [ProfileController::class, 'updatePrivacySettings'])->name('profile.updatePrivacySettings');
// });
