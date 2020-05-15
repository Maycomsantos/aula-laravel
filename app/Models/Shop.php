<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;


class Shop extends BaseModel implements HasMedia {

    use InteractsWithMedia;


    protected $fillable = ['name','description' , 'price','photo','status'];


}
