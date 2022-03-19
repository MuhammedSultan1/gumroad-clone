<?php

use Illuminate\Support\Facades\Route;
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

// Subscriptions
Route::get('/memberships', [SubscriptionController::class, 'index'])->name('membership');
Route::post('/memberships', [SubscriptionController::class, 'post'])->name('membership.store');


Route::get('/dashboard', function () {
    return view('pages.users.dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
