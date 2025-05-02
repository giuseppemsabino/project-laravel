<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function galaxies(){
        return $this->hasMany(Galaxy::class);
    }
}
