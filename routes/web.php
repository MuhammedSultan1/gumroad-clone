<?php

use App\Http\Controllers\Admin\Dashboard\ViewMerchantsController;
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


// Route::get('/users/dashboard', function () {
//     return view('pages.users.dashboard.index');
// })->middleware(['auth', 'is_user'])->name('user.dashboard');


// Route::get('/merchants/dashboard', function () {
//     return view('pages.merchants.dashboard.billing.index');
// })->middleware(['auth', 'is_merchant'])->name('merchant.dashboard');


// Admin Protected Routes
Route::group(['middleware' => ['auth', 'is_admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [ViewMerchantsController::class, 'index'])->name('admin.dashboard');
});


require __DIR__ . '/auth.php';
