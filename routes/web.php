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
Route::post('/store', [FarmerController::class, 'store'])->name("farmers.store");
Route::get('/edit/{id}', [FarmerController::class, 'edit'])->name("farmers.edit");
Route::put('/update/{id}', [FarmerController::class, 'update'])->name("farmers.update");
Route::delete('/delete/{id}', [FarmerController::class, 'delete'])->name("farmers.delete");

