<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AffiliatesController;

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

// Route::get('/', function () {
//     return view('auth/login');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', [HomeController::class, 'login']) ->name('home');

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', [HomeController::class, 'index']) ->name('dashboard');

Route::get('/affiliates', [AffiliatesController::class, 'members'])->name('affiliates.members');

// Route::get('/affiliates/edit', [AffiliatesController::class, 'edit'])->name('affiliates.edit');
Route::get('/affiliates/{id}/edit', [AffiliatesController::class, 'edit'])->name('affiliates.edit');
Route::put('/affiliates/{id}', [AffiliatesController::class, 'update'])->name('affiliates.update');

Route::get('/affiliates/upload', [AffiliatesController::class, 'upload'])->name('affiliates.upload');