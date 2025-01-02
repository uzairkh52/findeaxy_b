<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];
    
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
 
    public function Car() { 
        return $this->hasMany(Car::class); 
    }
    public function Bike(){
        return $this->hasMany(Bike::class);
    }   
    public function Laptop(){
        return $this->hasMany(Laptop::class);
    }
    public function Mobile(){
        return $this->hasMany(Mobile::class);
    }
  
}