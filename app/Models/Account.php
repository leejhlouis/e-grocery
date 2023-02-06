<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

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
