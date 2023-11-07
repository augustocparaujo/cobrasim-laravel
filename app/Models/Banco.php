<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;

    //guardar todas as informaçõe passadas
    protected $guarded = [];

    //pertece apenas um usuário
    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
}
