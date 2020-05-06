<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contas extends BaseModel
{
    protected $fillable = [
        'name', 'description', 'pay'
    ];
}
