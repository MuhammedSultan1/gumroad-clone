<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Stripe\MembershipsController;
use App\Http\Controllers\Stripe\SubscriptionController;
use App\Http\Controllers\Admin\Dashboard\ViewSalesController;
use App\Http\Controllers\Admin\Dashboard\ViewProductsController;
use App\Http\Controllers\Admin\Dashboard\ViewCustomersController;
use App\Http\Controllers\Admin\Dashboard\ViewMerchantsController;

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
Route::group(['middleware' => ['auth']], function () {
    // Memberships
    Route::get('/memberships', [MembershipsController::class, 'index'])->name('memberships');
    // Subscriptions
    Route::get('/subscribe', [SubscriptionController::class, 'index'])->name('subscribe');
    Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');
});
//Shop
Route::get('/shop', function () {
    return view('welcome');
})->name('shop');


// Route::get('/users/dashboard', function () {
//     return view('pages.users.dashboard.index');
// })->middleware(['auth', 'is_user'])->name('user.dashboard');


// Route::get('/merchants/dashboard', function () {
//     return view('pages.merchants.dashboard.billing.index');
// })->middleware(['auth', 'is_merchant'])->name('merchant.dashboard');

// Route::group(['middleware' => ['auth', 'role:Normal'], 'prefix' => 'user'], function () {
//     Route::get('/dashboard', [App\Http\Controllers\Merchant\Basic\Dashboard\IndexController::class, 'index'])->name('user.dashboard');
// });

Route::group(['middleware' => ['auth', 'EnsureUserIsSubscribed'], 'prefix' => 'billing'], function () {
    Route::get('/', [App\Http\Controllers\Merchant\Billing\BillingController::class, 'index'])->name('billing');
    Route::get('/invoices/{invoice}', [App\Http\Controllers\Merchant\Billing\BillingController::class, 'show'])->name('billing.review.invoice');
});

// Route::group(['middleware' => ['auth', 'role:Basic'], 'prefix' => 'basic/dashboard'], function () {
//     Route::get('/index', [App\Http\Controllers\Merchant\Basic\Dashboard\IndexController::class, 'index'])->name('basic.dashboard');
// });

// Route::group(['middleware' => ['auth', 'role:Pro'], 'prefix' => 'pro/dashboard'], function () {
//     Route::get('/index', [App\Http\Controllers\Merchant\Pro\Dashboard\IndexController::class, 'index'])->name('pro.dashboard');
// });

// Route::group(['middleware' => ['auth', 'role:Enterprise'], 'prefix' => 'enterprise/dashboard'], function () {
//     Route::get('/index', [App\Http\Controllers\Merchant\Enterprise\Dashboard\IndexController::class, 'index'])->name('enterprise.dashboard');
// });

// Dashboard routes which any authenticated user can visit
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/', [ViewMerchantsController::class, 'index'])->name('dashboard');
    Route::get('/comments', [ViewMerchantsController::class, 'index'])->name('viewComments');
    Route::get('/orders', [ViewMerchantsController::class, 'index'])->name('viewOrders');
});
// Dashboard routes that are for the admin
Route::group(['middleware' => ['auth', 'role:Admin'], 'prefix' => 'dashboard'], function () {
    Route::get('/sales', [ViewSalesController::class, 'index'])->name('admin.viewSales');
    Route::get('/merchants', [ViewMerchantsController::class, 'index'])->name('admin.viewMerchants');
    Route::get('/customers', [ViewCustomersController::class, 'index'])->name('admin.viewCustomers');
    Route::get('/products', [ViewProductsController::class, 'index'])->name('admin.viewProducts');
});


require __DIR__ . '/auth.php';
