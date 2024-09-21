<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CourseApplicationController;
use App\Http\Controllers\ManageCoursesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\ManageBootcampController; // Include the new controller

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/apply', [CourseApplicationController::class, 'index'])->name('apply');
Route::post('/apply', [CourseApplicationController::class, 'store'])->name('course-applications.store');

// Bootcamp Routes
Route::get('/bootcamp', [BootcampController::class, 'index'])->name('bootcamp.index');
Route::post('/bootcamp', [BootcampController::class, 'apply'])->name('bootcamp.apply');

// Bootcamp Applications Management Routes
Route::get('/portal/bootcampapplications', [ManageBootcampController::class, 'index'])->name('portal.bootcampapplications.index');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [UsersController::class, 'index'])->name('user.index');
    Route::get('/coursesapplied', [ManageCoursesController::class, 'index'])->name('coursesapplied.index');

    require_once 'profile.php';
});

require __DIR__ . '/auth.php';
