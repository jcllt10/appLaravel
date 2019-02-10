<?php

namespace ApiRestLaravelVue;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rols';
    protected $fillable = ['nombre', 'descripcion'];
}
