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
    return view('home');
});

Route::get('search', function () {
  return view('search');
});

/*------------------------------------------------------------------------ 
                            User pages
------------------------------------------------------------------------*/

Route::group(['middleware' => ['auth']], function() { 
  Route::post('user/logout', ['App\Http\Controllers\UserLoginController', 'close'])->name('user.logout');
});

Route::group(['middleware' => ['guest']], function() { 
  Route::resource('user', 'App\Http\Controllers\UserController')->except(['index', 'show']);

  Route::resource('user/login', 'App\Http\Controllers\UserLoginController')->only(['index', 'store']);
});

/*------------------------------------------------------------------------ 
                          Candidate pages
------------------------------------------------------------------------*/

Route::group(['middleware' => ['auth']], function() { 
  Route::resource('candidate', 'App\Http\Controllers\CandidateController')->except(['index']);
});

/*------------------------------------------------------------------------ 
                          Company pages
------------------------------------------------------------------------*/
Route::group(['middleware' => ['auth']], function() {

  Route::resource('company', 'App\Http\Controllers\CompanyController');

  Route::resource('job', 'App\Http\Controllers\JobController');
});