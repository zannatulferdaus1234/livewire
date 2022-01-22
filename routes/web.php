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


Route::view("alert","components.mainPage");

Route::view("livewire","system");



Route::middleware('guest')->group(function () {
    Route::view("register","auth.register")->name('register');
    Route::view("login","auth.login")->name('login');


});

// Route::get('/dashboard', function () {
//     return view('auth.dashboard');
// })->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::view("dashboard","auth.dashboard")->name('dashboard');
    Route::view("profile","auth.profile")->name('profile');

});
