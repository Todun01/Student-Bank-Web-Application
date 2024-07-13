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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'Admin\Auth\LoginController@login');
  Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('logout');

  Route::get('/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'Admin\Auth\RegisterController@register');

  Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'user'], function () {
  Route::get('/login', [App\Http\Controllers\User\Auth\LoginController::class, 'showLoginForm'])->name('login');
  Route::post('/login', [App\Http\Controllers\User\Auth\LoginController::class, 'login']);
  Route::post('/logout', 'User\Auth\LoginController@logout')->name('logout');

  Route::get('/register', [App\Http\Controllers\User\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
  Route::post('/register', [App\Http\Controllers\User\Auth\RegisterController::class, 'createuser']);

  Route::post('/password/email', 'User\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'User\Auth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'User\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'User\Auth\ResetPasswordController@showResetForm');
});
