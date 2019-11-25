<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Tarefas extends Model
{
    
    
    protected $fillable = [
        'nome', 'data', 'email',
    ];

   protected $table = 'tarefas';
}
