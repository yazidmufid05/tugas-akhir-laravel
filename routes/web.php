<?php

use App\Http\Controllers\HomeController; 
Route::get(
'/Route',
[HomeController::class, 'index']
);


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController; 
use App\Http\Controllers\MatakuliahController; 
use App\Http\Controllers\Nilai_mhsController; 
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// about us
Route::get(
    '/aboutus',[HomeController::class, 'aboutus']);

    Route::resource('jurusan', JurusanController::class); 
    Route::resource('matakuliah', MatakuliahController::class); 
    Route::resource('nilai_mhs', Nilai_mhsController::class); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('nilai_mhspdf', [Nilai_mhsController::class, 'nilai_mhsPDF'])->name('nilai_mhspdf');

Route::get('nilai_mhscsv',[Nilai_mhsController::class,'nilai_mhscsv']);
