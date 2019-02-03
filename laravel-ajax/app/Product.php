<?php

namespace Imperio;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'nombre', 'descripcion', 'precio', 'iamgen', 'genero', 'tipo',
  ];

  public $timestamps = false;
}
