<?php

use App\Http\Controllers\FarmerController;
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

Route::get('/', [FarmerController::class, 'index'])->name("farmers.list");
Route::get('/create', [FarmerController::class, 'create'])->name("farmers.create");
