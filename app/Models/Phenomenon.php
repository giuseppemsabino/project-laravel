<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phenomenon extends Model
{
    protected $table = 'phenomena'; // nome corretto della tabella

    public function galaxies(){
        return $this->belongsToMany(Galaxy::class);
    }
}
