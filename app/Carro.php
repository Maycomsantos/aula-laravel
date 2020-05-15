<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'model',
        'year',
    ];
}
