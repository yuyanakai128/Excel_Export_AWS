<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/', [UserController::class, 'fileExport']);
Route::get('rent-file-export', [UserController::class, 'rentFileExport'])->name('rent-file-export');
Route::get('sales-file-export', [UserController::class, 'salesFileExport'])->name('sales-file-export');
Route::get('delete-file', [UserController::class, 'deleteFolder'])->name('deleteFolder');