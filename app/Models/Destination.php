<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(user::class);
    }

    public function reservations(){
        return $this->hasMany(user::class);
    }
   
}
