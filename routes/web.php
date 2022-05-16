<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaceController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/space', [SpaceController::class, 'index'])->name('space.index');
Route::get('/space/create', [SpaceController::class, 'create'])->name('space.create');
Route::post('/space', [SpaceController::class, 'store'])->name('space.store');
Route::get('/space/{space}', [SpaceController::class, 'show'])->name('space.show');
Route::get('/space/{space}/edit', [SpaceController::class, 'edit'])->name('space.edit');
Route::put('/space/{space}', [SpaceController::class, 'update'])->name('space.update');
Route::delete('/space/{space}', [SpaceController::class, 'destroy'])->name('space.destroy');
