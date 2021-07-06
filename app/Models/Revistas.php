<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revistas extends Model
{
    use HasFactory;
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'titulo',
        'tipo_id',
        'fecha',
        'num_paginas',
        'num_ejemplares',
    ];


    public function tipo(){
        return $this->hasMany(Tipo::class);
    }
}
