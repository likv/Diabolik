<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporadas extends Model
{
    public function temporadas(){
        return $this->belongsTo(Temporadas::class);
    }
}
