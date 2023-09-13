<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /*
    //fazer um casts, com o seja salvo e induzido com array para o banco
    protected $castas = [
        'items' => 'array'
    ]
    */

    protected $dates = ['date'];

    //perencer a apenas um usuário
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //atualizar tudo // se quiser que algo não possa ser atualizado só descriminar
    protected $guarded = [];

}
