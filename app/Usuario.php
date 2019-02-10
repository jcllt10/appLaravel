<?php

namespace ApiRestLaravelVue;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuario';
    protected $fillable = ['dni', 'email','password'];

   public function roles()
   {
      return $this->belongsToMany(Rol::class);
   }


}
