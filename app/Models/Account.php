<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function gender(){
        return $this->belongsTo(Gender::class);
    }
}
