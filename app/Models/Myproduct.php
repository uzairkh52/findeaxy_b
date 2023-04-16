<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myproduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'type', 'qty', 'price','created_at', 'updated_at',
    ];
    
}