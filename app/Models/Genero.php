<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    // Define a relação com HQs, se quiser usar no @foreach futuramente
    public function hqs()
    {
        return $this->hasMany(Hq::class);
    }
}
