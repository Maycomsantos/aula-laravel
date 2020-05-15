<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function messages()
    {
        return $this->belongsTo(\App\Models\Contas::class, 'id');
    }
}