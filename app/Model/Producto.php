<?php

namespace ApiRestLaravelVue;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $fillable = ['nombre','cantidad','valor'];
}
