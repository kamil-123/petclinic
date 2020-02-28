<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pet;


class Visit extends Model
{
    public function pet(){
        return $this->belongsTo(Pet::class);
    }

}
