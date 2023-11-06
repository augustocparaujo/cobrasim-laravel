<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobranca extends Model
{
    use HasFactory;

    //atualizar tudo // se quiser que algo não possa ser atualizado só descriminar
    protected $guarded = [];

    //pertencer a apenas um usuário
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
