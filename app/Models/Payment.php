<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends BaseModel
{
    protected $fillable = ['name','details','sales'];
}
