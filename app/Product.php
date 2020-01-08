<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Especificar campos compatibles con asignación masiva
    protected $fillable = ['name', 'short', 'body'];
}
