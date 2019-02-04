<?php

namespace Imperio\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
      $products = \Imperio\Product::paginate(6);
      return view('index', compact('products'));
    }

    public function products(){
      $products = \Imperio\Product::paginate();
      return view('product-list', compact('products'));
    }

    public function nosotras(){
      return view('about');
    }

    public function contacto(){
      return view('contact');
    }

    public function detalle($id){
      $product = \Imperio\Product::findOrFail($id);
        return \View::make('product-detail', compact('product'));
    }
}
