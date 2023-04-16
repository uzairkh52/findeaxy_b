<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_model_list extends Model
{
    use HasFactory;
    protected $fillable = [
        "Make",
        "Year",
        "Model",
        "Category",
    ];
}