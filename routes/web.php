<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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


// **Rotta homepage

Route::get('/',[PublicController::class,'welcome'] 
)->name('homepage');


// ** Rotta contatti

Route::get('/contatti',[PublicController::class,'contatti'])->name('contatti');

// ** Rotta mail

Route::post('/contattaci/submit',[PublicController::class,'submit'])->name('submit');