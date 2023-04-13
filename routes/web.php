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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::any('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::any('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth');

Route::any('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth');

Route::any('/bank-account', 'App\Http\Controllers\BankAccount@index')->middleware('auth');
Route::any('/bank-account/add', 'App\Http\Controllers\BankAccount@add')->middleware('auth');
Route::any('/bank-account/edit/{id}', 'App\Http\Controllers\BankAccount@edit')->middleware('auth');

