<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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
//     return view('welcome');
// });
Route::get('/', [PeopleController::class, 'add'])->name('add');
Route::post('/store', [PeopleController::class, 'store'])->name('store');
Route::get('/list', [PeopleController::class, 'list'])->name('list');
Route::get('/edit/{people}', [PeopleController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [PeopleController::class, 'delete'])->name('del');