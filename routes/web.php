<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AffiliatesController;
use App\Http\Controllers\ClavesController;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

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

Route::get('/claves', [ClavesController::class, 'index'])->name('claves');
// Route::get('/claves/register', [ClavesController::class, 'create'])->name('claves.register');



Route::get('/affiliates/upload', [AffiliatesController::class, 'upload'])->name('affiliates.upload');

// Route::get('/affiliates/upload', [AffiliatesController::class, 'uploadContent'])->name('affiliates.upload');


//IMPORT

// Route::get('/afilliates/upload', function () {

//     return view('upload',[
//         'users' => App\Models\User::all()
//     ]);
// });

// Route::post('import', function () {
//     Excel::import(new UsersImport, request()->file('file'));
//     return redirect()->back()->with('success','Data Imported Successfully');
// });


// Route::get('/affiliates/upload', [AffiliatesController::class, 'upload'])->name('affiliates.upload');

// Route::get('file-import-export', [AffiliatesController::class, 'fileImportExport'])->name('file-import-export');
Route::put('/file-import', [AffiliatesController::class, 'fileImport'])->name('file-import');
// Route::post('affiliates/validateandimportdata/', [AffiliatesController::class, 'validateAndImportdata'])->name('affiliates.validateandimportdata');
