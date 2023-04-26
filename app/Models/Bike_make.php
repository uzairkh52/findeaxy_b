<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike_make extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
    ];
}