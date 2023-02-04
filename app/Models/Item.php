<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;

    use HasFactory;
    
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
