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


//    -----------NomeControlle@miaFunzione
Route::get('/', 'PageController@index' )->name('home');
Route::get('/chi-siamo', 'PageController@about' )->name('about');
Route::get('/contatti', 'PageController@contacts' )->name('contacts');

Route::get('/lista-studenti', 'StudentController@index')->name('students');

