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

// ROUTES RELATED TO MEMBERSHIPS //

// Memberships
Route::get('/memberships', [MembershipsController::class, 'index'])->name('memberships');
// Subscriptions
Route::get('/subscribe', [SubscriptionController::class, 'index'])->name('subscribe');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');

//Shop
Route::get('/shop', function () {
    return view('welcome');
});


Route::get('/users/dashboard', function () {
    return view('pages.users.dashboard.index');
})->middleware(['auth'])->name('user.dashboard');

Route::get('/merchants/dashboard', function () {
    return view('pages.merchants.dashboard.billing.index');
})->middleware(['auth'])->name('merchant.dashboard');

require __DIR__ . '/auth.php';
