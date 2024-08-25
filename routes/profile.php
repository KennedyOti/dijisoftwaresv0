<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Route group with authentication middleware
Route::middleware(['auth'])->prefix('profile')->group(function () {
    // Display user profile form
    Route::get('/{id}', [ProfileController::class, 'edit'])->name('profile.edit');

    // Update user profile
    Route::patch('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('password/{id}', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    // Delete user profile
    Route::delete('/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Additional Routes (uncomment if needed)
    /*
    // Show Profile
    Route::get('/{userId}', [ProfileController::class, 'show'])->name('profile.show');

    // Create Profile
    Route::post('/', [ProfileController::class, 'store'])->name('profile.store');

    // Update Profile
    Route::put('/{userId}', [ProfileController::class, 'update'])->name('profile.update');

    // Delete Profile
    Route::delete('/{userId}', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Upload Profile Picture
    Route::post('/{userId}/picture', [ProfileController::class, 'uploadPicture'])->name('profile.uploadPicture');

    // Delete Profile Picture
    Route::delete('/{userId}/picture', [ProfileController::class, 'deletePicture'])->name('profile.deletePicture');

    // Get Privacy Settings
    Route::get('/{userId}/privacy', [ProfileController::class, 'getPrivacySettings'])->name('profile.getPrivacySettings');

    // Update Privacy Settings
    Route::put('/{userId}/privacy', [ProfileController::class, 'updatePrivacySettings'])->name('profile.updatePrivacySettings');
    */
});
