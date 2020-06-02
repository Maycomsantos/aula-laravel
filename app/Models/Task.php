<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends BaseModel
{
    protected $fillable = ['name','details','status'];

        public function user()
        {
            return $this->belongsTo(User::class);
        }

}
