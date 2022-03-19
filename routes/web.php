<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Stripe\MembershipsController;
use App\Http\Controllers\Stripe\SubscriptionController;

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

// Memberships
Route::get('/memberships', [MembershipsController::class, 'index'])->name('memberships');
// Subscriptions
Route::get('/subscribe', [SubscriptionController::class, 'index'])->name('subscribe');
Route::post('/subscribe', [SubscriptionController::class, 'post'])->name('subscribe.store');


Route::get('/dashboard', function () {
    return view('pages.users.dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
