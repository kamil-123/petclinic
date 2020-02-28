<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Owner;

class Pet extends Model
{
    public function owner(){
        return $this->belongsTo(Owner::class);
    }
}
