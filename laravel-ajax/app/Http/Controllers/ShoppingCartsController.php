<?php

namespace Imperio\Http\Controllers;

use Illuminate\Http\Request;

use Imperio\ShoppingCart;

class ShoppingCartsController extends Controller
{
    public function index(){
      $shopping_cart_id = \Session::get('shopping_cart_id');

      $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

      $products = $shopping_cart->products()->get();

      $total = $shopping_cart->total();

      return view('cart', ['products' => $products, 'total' => $total]);
    }
}
