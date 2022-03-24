<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('Subscribed', function ($user) {
            return $user->subscribed('Basic Plan') || $user->subscribed('Pro Plan') || $user->subscribed('Enterprise Plan');
        });
        Blade::if('NotSubscribed', function ($user) {
            return !($user->subscribed('Basic Plan') || $user->subscribed('Pro Plan') || $user->subscribed('Enterprise Plan'));
        });
        Blade::if('SubscribedToProduct', function ($user, $stripeProductId, $stripeName) {
            return $user->subscribedToProduct($stripeProductId, $stripeName);
        });
    }
}
