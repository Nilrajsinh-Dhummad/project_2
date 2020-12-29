<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');

});
Route::resource('test','App\Http\controllers\Testcontroller');
Route::resource('test','App\Http\controllers\Testcontroller@store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\Testcontroller::class, 'store'])->name('insert');
Route::get('/create_user', [App\Http\Controllers\Testcontroller::class, 'create'])->name('create');
Route::get('/edit_user', [App\Http\Controllers\Testcontroller::class, 'edit'])->name('edit');
Route::get('/update_user', [App\Http\Controllers\Testcontroller::class, 'update'])->name('update');
Route::get('/destroy_user', [App\Http\Controllers\Testcontroller::class, 'destroy'])->name('destroy');
