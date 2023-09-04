<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/items', [ItemController::class, 'index'])->name('item.index');
Route::get('/items', 'App\Http\Controllers\ItemController@index')->name('item.index');
Route::get('/items/create', 'App\Http\Controllers\ItemController@create')->name('item.create');
Route::post('/items', 'App\Http\Controllers\ItemController@store')->name('item.store');
Route::get('/items/{item}', 'App\Http\Controllers\ItemController@show')->name('item.show');
Route::get('/items/{item}/edit', 'App\Http\Controllers\ItemController@edit')->name('item.edit');
Route::put('/items/{item}', 'App\Http\Controllers\ItemController@update')->name('item.update');
Route::delete('/items/{item}', 'App\Http\Controllers\ItemController@destroy')->name('item.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
