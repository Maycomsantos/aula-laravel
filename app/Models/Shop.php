<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Shop extends BaseModel 
{
    protected $fillable = ['name','description' , 'price','photo','status'];

}
