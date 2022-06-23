<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public function marca(){
        //1 categoria tiene muchos prodcutos
        return $this->hasMany(marca::class);
    }
}
