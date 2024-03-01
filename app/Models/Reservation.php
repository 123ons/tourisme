<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    use HasFactory;

    public function destinations(){
        return $this->belongsTo(user::class);
    }
    public function offres(){
        return $this->belongsTo(offre::class);
    }
    public function users(){
        return $this->belongsTo(user::class);
    }
    public function transactions(){
        return $this->HasOne(transaction::class);
    }
}
