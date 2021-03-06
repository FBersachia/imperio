<?php

namespace Imperio\Providers;

use Illuminate\Support\ServiceProvider;
use Imperio\ShoppingCart;

class ShoppingCartProvider extends ServiceProvider
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
          view()->composer('*', function($view){
          $shopping_cart_id = \Session::get('$shopping_cart_id');

          $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

          \Session::put('shopping_cart_id', $shopping_cart->id);

          $view->with('shopping_cart', $shopping_cart);
        });
    }
}
