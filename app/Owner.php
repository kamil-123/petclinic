<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pet;

class Owner extends Model
{
    public function pets(){
        return $this->hasMany(Pet::class);
    }
}
