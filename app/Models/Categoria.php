<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    //extender modelo para relacionarlo con productos 
    public function productos(){
        //1 categoria tiene muchos prodcutos
        return $this->hasMany(producto::class);
    }
}
