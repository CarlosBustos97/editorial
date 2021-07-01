<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revistas extends Model
{
    use HasFactory;
    public function tipo(){
        return $this->hasMany(Tipo::class);
    }
}
