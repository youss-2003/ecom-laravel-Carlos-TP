<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DataController::class,'Data'])->name('home');

Route::get('/Blog',[DataController::class,'BlogData'])->name('blog');

Route::get('/News',[DataController::class,'NewsData'])->name('news');

Route::get('/storeTickets',[DataController::class,'getstoredata'])->name('storeddata');

Route::post('/stored',[DataController::class,'store'])->name('stored');

