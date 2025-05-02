<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galaxy extends Model
{
    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function phenomena(){
        return $this->belongsToMany(Phenomenon::class);
    }
}
