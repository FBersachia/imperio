<?php

namespace Imperio;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ['status'];

    public function inShoppingCarts(){
      return $this->hasManny('Imperio\InShoppingCart');
    }

    public function products(){
      return $this->belongsToMany('Imperio\Product', 'in_shopping_carts');
    }

    public function productsSize(){
      return $this->products()->count();
    }

    public function total(){
      return $this->products()->sum('precio');
    }

    public static function findOrCreateBySessionID($shopping_cart_id){
        if ($shopping_cart_id) {
          return ShoppingCart::findBySession($shopping_cart_id);
        }else {
          return ShoppingCart::createWithoutSession();
        }
    }

    public static function findBySession($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession(){
      return ShoppingCart::create([
        'status' => 'incompleted'
      ]);
    }
}
