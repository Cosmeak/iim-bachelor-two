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

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/404', function() {
  return view('404');
})->name('404');

Route::fallback(function(){
  return view('404');
});

Route::get('/contact', function() {
  return view('contact');
})->name('contact');

/*------------------------------------------------------------------------ 
                            User pages
------------------------------------------------------------------------*/

Route::post('user/logout', ['App\Http\Controllers\UserLoginController', 'close'])->name('user.logout')->middleware('auth');

Route::group(['middleware' => ['guest']], function() { 
  Route::resource('user', 'App\Http\Controllers\UserController')->except(['show']);

  Route::resource('user/login', 'App\Http\Controllers\UserLoginController')->only(['index', 'store']);
});

/*------------------------------------------------------------------------ 
                          Candidate pages
------------------------------------------------------------------------*/

Route::resource('candidate', 'App\Http\Controllers\CandidateController')->except(['index']);

Route::group(['prefix' => 'candidate'], function() {
  Route::resource('education', 'App\Http\Controllers\EducationController')->except(['index', 'create', 'show']);
});

/*------------------------------------------------------------------------ 
                          Company pages
------------------------------------------------------------------------*/


Route::group(['prefix' => 'company'], function() {
  Route::resource('job', 'App\Http\Controllers\JobController');
});

Route::resource('company', 'App\Http\Controllers\CompanyController');
