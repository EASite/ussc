<?php

use App\Http\Controllers\ItemController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [ItemController::class, 'index'])->name('home');
Route::post('/add', [ItemController::class, 'add'])->name('add_item');
Route::post('/edit/{id}', [ItemController::class, 'edit'])->name('edit_item');
Route::get('/delete/{id}', [ItemController::class, 'delete'])->name('delete_item');
Route::get('/getItems', [ItemController::class, 'getItems'])->name('getItems');
