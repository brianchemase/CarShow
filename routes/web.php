<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisplayController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilterController;

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




Route::get('/', [DisplayController::class, 'DisplayLanding'])->name('landing');


Route::get('/imagesDrop', [DropzoneController::class,'index']);

Route::post('/imagesupload',[DropzoneController::class,'store'])->name('dropzone.store');

Route::get('/vehicles/search', [FilterController::class,'search'])->name('filtercar');

//Admin Dashboard
Route::group(['prefix' => 'admins'], function() {

    Route::get('/', [DashboardController::class, 'home'])->name('dash');
    Route::get('/RegCar', [DashboardController::class, 'RegisterCar'])->name('regcar');
    Route::get('/UploadRegCar', [DashboardController::class, 'uploadRegisterCar'])->name('imageregcar');


    Route::get('/forms', [DashboardController::class, 'form'])->name('dashform');
    Route::get('/Table', [DashboardController::class, 'table'])->name('dashtable');
    Route::get('/blank', [DashboardController::class, 'home'])->name('dashblank');
});

