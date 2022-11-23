<?php

use App\Http\Controllers\CreateProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::prefix('createprofile')->group(function () {
        Route::get('/step1', [CreateProfileController::class, 'show1'])->name('createprofile.step1');
        Route::post('/step1', [CreateProfileController::class, 'store1'])->name('createprofile.step1');
        Route::get('/step2', [CreateProfileController::class, 'show2'])->name('createprofile.step2');
        Route::post('/step2', [CreateProfileController::class, 'store2'])->name('createprofile.step2');
        Route::get('/step3', [CreateProfileController::class, 'show3'])->name('createprofile.step3');
        Route::post('/step3', [CreateProfileController::class, 'store3'])->name('createprofile.step3');
    });
});

Route::middleware('auth')->group(function () {
    Route::delete('/project/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/myprofile', [ProfileController::class, 'show'])->name('profile.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
