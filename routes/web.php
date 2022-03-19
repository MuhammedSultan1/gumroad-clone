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

// ROUTES RELATED TO STRIPE //

// Subscriptions
Route::get('/memberships', function () {
    return view('pages.memberships.subscribe');
});


Route::get('/dashboard', function () {
    return view('pages.users.dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
