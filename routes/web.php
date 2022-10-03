<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
    return view('index');
})->name('main')->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('layouts.auth');

Route::controller(ApiController::class)->group(function () {
    Route::get('/home/api/create', 'create')->name('api.create')->middleware('auth');
    Route::post('/home/api/store', 'store')->name('api.store')->middleware('auth');
    Route::get('/home/api', 'index')->name('api.index');
    Route::get('/home/api/edit/{id}', 'edit')->name('api.edit')->middleware('auth');
    Route::put('/home/api/update/{id}', 'update')->name('api.update')->middleware('auth');
    Route::delete('/home/api/delete/{id}', 'destroy')->name('api.delete')->middleware('auth');
});

