<?php

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

Route::get('/', 'App\Http\Controllers\ControllerLista@index')->name('listas.raiz');

Route::get('listas', 'App\Http\Controllers\ControllerLista@index')->name('listas.index');

Route::get('agregar', 'App\Http\Controllers\ControllerLista@agregar')->name('listas.agregar');

Route::post('crear', 'App\Http\Controllers\ControllerLista@store')->name('listas.store');

Route::get('listas/{id}/editar', 'App\Http\Controllers\ControllerLista@edit')->name('listas.edit');

Route::put('listas/{listas}/editar', 'App\Http\Controllers\ControllerLista@update')->name('listas.update');

Route::delete('listas/{id}', 'App\Http\Controllers\ControllerLista@destroy')->name('listas.destroy');
