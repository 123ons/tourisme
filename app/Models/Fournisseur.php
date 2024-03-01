<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    public function commercials() {
        return $this->belongsTo(commercial::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function offres(){
        return $this->hasMany(offre::class);
    }


    
}
