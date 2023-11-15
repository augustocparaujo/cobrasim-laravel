<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    use HasFactory;

    //atualizar tudo // se quiser que algo não possa ser atualizado só descriminar
    protected $guarded = [];

    //pertece a apenas um usuario
    public function user()
    {
        return $this->belongsTo('App\Models\Catalogo');
    }
}
