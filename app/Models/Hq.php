<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hq extends Model
{
    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }
}
