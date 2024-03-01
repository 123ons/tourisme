<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    public function fournisseurs(){
        return $this->belongsTo(fournisseur::class);
    }
    public function reservations(){
        return $this->hasMany(reservation::class);
    }

}
