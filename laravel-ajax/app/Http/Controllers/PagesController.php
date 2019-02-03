<?php

namespace Imperio\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
      $products = \Imperio\Product::paginate();
      return view('index', compact('products'));
    }
}
