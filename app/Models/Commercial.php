<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    use HasFactory;

    
        public function users() {
            return $this->hasMany(user::class);
        }


        
            public function fournisseurs() {
                return $this->hasMany(fournisseur::class);
            }
        
    
}
