<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatakabelController;
use App\Http\Controllers\freonController;
use App\Http\Controllers\masukkabelutpController;
use App\Http\Controllers\keluarkabelutpController; 
use App\Http\Controllers\mskfanController; 
use App\Http\Controllers\mskkasetlisaController; 
use App\Http\Controllers\mskkasetrackController; 
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MskfoController;
use App\Http\Controllers\mskcompresorController;
use App\Http\Controllers\mskpipaacController;

Route::get('/', [DatakabelController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/mskutp', [masukkabelutpController::class, 'mskutp'])->name('mskutp');
Route::get('/freon', [freonController::class, 'freon'])->name('freon'); 
Route::get('/mskfan', [mskfanController::class, 'mskfan'])->name('mskfan'); 
Route::get('/mskkasetlisa', [mskkasetlisaController::class, 'mskkasetlisa'])->name('mskkasetlisa'); 
Route::get('/mskkasetrack', [mskkasetrackController::class, 'mskkasetrack'])->name('mskkasetrack'); 
Route::get('/stock', [datakabelController::class, 'stock'])->name('stock'); 
Route::get('/mskfo', [MskfoController::class, 'mskfo'])->name('mskfo');
Route::get('/mskcompresor', [MskcompresorController::class, 'mskcompresor'])->name('mskcompresor');
Route::get('/mskpipaac', [mskpipaacController::class, 'mskpipaac'])->name('mskpipaac');

Route::post('post', [MskfoController::class, 'post'])->name('post');

// route Edit
Route::get('/edit1/{id}', [MskfoController::class, 'edit1'])->name('Mskfo.edit1');

//Route::get('/about', function () {
 //   return view('welcome');
//});
